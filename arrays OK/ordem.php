<?php

// Define um array de arrays associativos, cada um representando um aluno e sua respectiva nota
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' =>    6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

// Ordena o array $notas com base nas notas, em ordem decrescente
usort($notas, function (array $nota1, array $nota2): int {
    // Compara as notas dos alunos usando o operador de espaçonave (<=>)
    // $nota2['nota'] <=> $nota1['nota'] faz a ordenação decrescente
    return $nota2['nota'] <=> $nota1['nota'];
});

// Exibe a estrutura do array $notas após a ordenação
var_dump($notas);
