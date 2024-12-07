<?php

// Define um array associativo com chaves numéricas e de outros tipos
$array = [
    1 => 'a',     // Chave numérica inteira
    '1' => 'b',   // Chave string contendo '1'
    1.5 => 'c',   // Chave float
    true => 'd'   // Chave booleana
];

// Itera sobre o array usando um loop foreach

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
