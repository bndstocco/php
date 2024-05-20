<?php
$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

// Ordena em ordem crescente pelos valores
sort($notas);
echo "sort:\n";
var_dump($notas);

// Ordena em ordem decrescente pelos valores
rsort($notas);
echo "rsort:\n";
var_dump($notas);

// Ordena em ordem crescente pelos valores, preservando as chaves
asort($notas);
echo "asort:\n";
var_dump($notas);

// Ordena em ordem decrescente pelos valores, preservando as chaves
arsort($notas);
echo "arsort:\n";
var_dump($notas);

// Ordena em ordem crescente pelas chaves
ksort($notas);
echo "ksort:\n";
var_dump($notas);

// Ordena em ordem decrescente pelas chaves
krsort($notas);
echo "krsort:\n";
var_dump($notas);

// Função de comparação personalizada para usort
function comparar($a, $b) {
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

// Ordena usando uma função de comparação personalizada
usort($notas, 'comparar');
echo "usort:\n";
var_dump($notas);

// Ordena preservando as chaves usando uma função de comparação personalizada
uasort($notas, 'comparar');
echo "uasort:\n";
var_dump($notas);

// Ordena pelas chaves usando uma função de comparação personalizada
uksort($notas, 'comparar');
echo "uksort:\n";
var_dump($notas);

// Ordena usando a "ordenação natural"
natsort($notas);
echo "natsort:\n";
var_dump($notas);

// Ordena usando a "ordenação natural" sem diferenciar maiúsculas de minúsculas
natcasesort($notas);
echo "natcasesort:\n";
var_dump($notas);
