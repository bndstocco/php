<?php

// Array associativo que contém as notas de alunos
$notas = [
    [
        'aluno' => 'Maria',  // Nome do aluno
        'nota' => 10,        // Nota do aluno
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

// Função que será usada para ordenar as notas
// Recebe duas arrays (nota1 e nota2) e compara os valores da chave 'nota'
function ordenaNotas(array $nota1, array $nota2): int
{
    // A função usa o operador "spaceship" (<=>) para comparar as notas
    // Retorna -1 se nota2 for maior que nota1, 1 se nota1 for maior que nota2, ou 0 se forem iguais
    return $nota2['nota'] <=> $nota1['nota'];
}

// A função usort() é usada para ordenar o array $notas usando a função 'ordenaNotas' como critério de ordenação
usort($notas, 'ordenaNotas');

// Exibe o array $notas ordenado
var_dump($notas);
