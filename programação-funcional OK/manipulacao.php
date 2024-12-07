<?php

use Alura\Fp\Maybe;

require_once '../composer/buscador-cursos-alura/vendor/autoload.php';

// Supondo que 'dados.php' retorna um objeto Maybe
/** @var Maybe $dados */
$dados = require 'dados.php';

// Função para converter o nome do país para maiúsculas
function convertePaisParaLetraMaiuscula(array $pais): array {
    $pais['pais'] = mb_convert_case($pais['pais'], MB_CASE_UPPER);
    return $pais;
}

// Função para verificar se o país tem espaço no nome
$verificaSePaisTemEspacoNoNome = function (array $pais): bool {
    return strpos($pais['pais'], ' ') !== false;
};

// Função para soma de medalhas
$somaMedalhas = fn (int $medalhasAcumuladas, int $medalhas) => $medalhasAcumuladas + $medalhas;

// Função para pipeline de transformação dos nomes dos países para maiúsculas
$nomesDePaisesEmMaiusculo = function (Maybe $dados) use ($convertePaisParaLetraMaiuscula) {
    return $dados->map(function ($dados) use ($convertePaisParaLetraMaiuscula) {
        return array_map($convertePaisParaLetraMaiuscula, $dados);
    });
};

// Função para filtrar países que têm espaço no nome
$filtraPaisesSemEspacoNoNome = function (Maybe $dados) use ($verificaSePaisTemEspacoNoNome) {
    return $dados->map(function ($dados) use ($verificaSePaisTemEspacoNoNome) {
        return array_filter($dados, $verificaSePaisTemEspacoNoNome);
    });
};

// Pipeline de transformação e filtragem dos dados
$funcoes = \igorw\pipeline(
    $nomesDePaisesEmMaiusculo,
    $filtraPaisesSemEspacoNoNome
);

// Executa as transformações e filtragens nos dados
$dados = $funcoes($dados);

// Verifica se os dados estão presentes ou obtém um array vazio
$dadosArray = $dados->getOrElse([]);

// Exibe os dados após as transformações e filtragens
var_dump($dadosArray);

// Cálculo total de medalhas
$medalhas = array_reduce(
    array_map(
        fn (array $medalhas): int => array_reduce($medalhas, $somaMedalhas, 0),
        array_column($dadosArray, 'medalhas')
    ),
    $somaMedalhas,
    0
);

// Ordena os dados por número de medalhas
usort($dadosArray, function (array $pais1, array $pais2) use ($somaMedalhas) {
    return $somaMedalhas($pais1['medalhas'], $pais2['medalhas']);
});

// Exibe os dados ordenados
var_dump($dadosArray);

// Exibe o total de medalhas
echo "Total de medalhas: $medalhas\n";
