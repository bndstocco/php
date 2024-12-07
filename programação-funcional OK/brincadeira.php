<?php

$variavel = 'teste'; // Variável global

function outra(callable $funcao): void
{
    echo 'Executando outra função: ';
    echo $funcao(); // Invoca a função passada como parâmetro e exibe seu retorno
}

// Declaração de uma função anônima atribuída a uma variável
$nomeDaFuncao = function () use ($variavel) {
    echo $variavel; // Usa a variável $variavel definida fora do escopo da função anônima
    return 'Uma outra função';
};

outra($nomeDaFuncao); // Chamada da função 'outra' passando a função anônima como argumento

var_dump($nomeDaFuncao); // Exibe informações sobre a função anônima

