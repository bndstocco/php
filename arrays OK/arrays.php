<?php

// Define um array associativo com índices inteiros e valores de strings
$array = [
    0 => 'um',
    1 => 'dois',
    3 => 'tres',
];

// Itera sobre cada elemento do array
foreach ($array as $numeral => $nomeNumero) {
    // Para cada elemento, imprime a chave (numeral) e o valor (nomeNumero) no formato "X em português é: Y"
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

// Imprime a contagem total de elementos no array
echo "Total: " . count($array) . PHP_EOL;

// Verifica se o array é uma lista (um array indexado que começa em 0 e cujas chaves são uma sequência contínua de inteiros)
// array_is_list retorna true se o array for uma lista, false caso contrário
var_dump(array_is_list($array));
