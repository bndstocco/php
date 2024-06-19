<?php

use Alura\Fp\Maybe;

require_once '../composer/buscador-cursos-alura/vendor/autoload.php';

/** @var Maybe $dados */
$dados = require 'dados.php';

$contador = count($dados->getOrElse([]));
echo "Número de países: $contador\n";

$somaMedalhas = fn (int $medalhasAcumuladas, int $medalhas) => $medalhasAcumuladas + $medalhas;

function convertePaisParaLetraMaisucula(array $pais): array {
    $pais['pais'] = mb_convert_case($pais['pais'], MB_CASE_UPPER);
    return $pais;
}

$verificaSePaisTemEspacoNoNome = fn (array $pais): bool => strpos($pais['pais'], ' ') !== false;

$nomesDePaisesEmMaisuculo = fn (Maybe $dados) => $dados->map(function ($dados) {
    return array_map('convertePaisParaLetraMaisucula', $dados);
});

$filtraPaisesSemEspacoNoNome = fn (Maybe $dados) => $dados->map(function ($dados) use ($verificaSePaisTemEspacoNoNome) {
    return array_filter($dados, $verificaSePaisTemEspacoNoNome);
});

$funcoes = \igorw\pipeline(
    $nomesDePaisesEmMaisuculo,
    $filtraPaisesSemEspacoNoNome
);
$dados = $funcoes($dados);

var_dump($dados->getOrElse([]));

$medalhas = array_reduce(
    array_map(
        fn (array $medalhas): int => array_reduce($medalhas, $somaMedalhas, 0),
        array_column($dados->getOrElse([]), 'medalhas')
    ),
    $somaMedalhas,
    0
);

usort($dados->getOrElse([]), function (array $pais1, array $pais2) use ($somaMedalhas) {
    return $somaMedalhas($pais1['medalhas'], $pais2['medalhas']);
});

var_dump($dados->getOrElse([]));

echo "Total de medalhas: $medalhas\n";
