<?php

// Array associativo que contém nomes de alunos como chaves e suas respectivas notas como valores
$notas = [
    'Vinicius' => null,   // Vinicius ainda não tem nota
    'João' => 8,          // Nota de João
    'Ana' => 10,          // Nota de Ana
    'Roberto' => 7,       // Nota de Roberto
    'Maria' => 9,         // Nota de Maria
];

// Ordena o array pelas chaves em ordem decrescente
krsort($notas);
// Exibe o array ordenado
var_dump($notas);

// Verifica se $notas é um array
if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;  // Se for um array, imprime a mensagem
}

// Verifica se o array $notas é uma lista (array indexado sequencialmente)
var_dump(array_is_list($notas));  // Deve retornar false, pois $notas é um array associativo

// Verifica se a chave 'Ana' existe no array e não é nula
echo 'Ana fez a prova:' . PHP_EOL;
var_dump(isset($notas['Ana']));  // Deve retornar true, pois 'Ana' existe e sua nota não é nula

// Verifica se o valor 10 existe no array $notas
echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));  // Deve retornar true, pois 10 é uma das notas

// Procura a chave associada ao valor 10 no array $notas
echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true));  // Deve retornar 'Ana', pois ela tirou 10

// Comentários explicando as funções usadas
// array_key_exists = verifica se a chave existe no array
// in_array = verifica se o valor existe no array
// isset = verifica se a chave existe no array e seu valor não é nulo
