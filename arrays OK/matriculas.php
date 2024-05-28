<?php

// Define um array com os alunos de 2021
$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

// Define um array com os novos alunos
$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

// Cria um novo array para 2022 combinando alunos de 2021, um novo aluno, e os novos alunos
$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];

// Adiciona vários alunos ao final do array $alunos2022
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

// Adiciona mais um aluno ao final do array $alunos2022
$alunos2022[] = 'Luiz';

// Adiciona vários alunos ao início do array $alunos2022
array_unshift($alunos2022, 'Stephane', 'Rafaela');

// Remove e imprime o primeiro aluno do array $alunos2022
echo array_shift($alunos2022) . PHP_EOL;

// Remove e imprime o último aluno do array $alunos2022
echo array_pop($alunos2022) . PHP_EOL;

// Imprime a estrutura do array $alunos2022 para inspecionar seus elementos
var_dump($alunos2022);
