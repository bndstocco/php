<?php

// Define um array associativo com as notas dos alunos
$notasAlunos = [
    'bnd' => NULL,
    'pedro' => 2,
    'luis' => 7,
    'lucas' => 5,
    'joao' => 2,
];

// Ordena o array pelas chaves em ordem decrescente
krsort($notasAlunos);
var_dump($notasAlunos);

// Verifica se $notas é um array
if (is_array($notasAlunos)) {
    echo 'É um array' . PHP_EOL;
} else {
    echo 'Não é um array' . PHP_EOL;
}

// Verifica se $notas é uma lista indexada sequencialmente
var_dump(array_is_list($notasAlunos));

// Verifica se a chave 'Ana' está definida no array $notas e não é nula
echo 'Ana fez a prova: ' . PHP_EOL;
var_dump(isset($notasAlunos['Ana']));

// Verifica se há algum valor 10 no array $notas, com comparação estrita
echo 'Quem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notasAlunos, true));

// Busca a chave associada ao valor 10 no array $notas, com comparação estrita
echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notasAlunos, true));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula
