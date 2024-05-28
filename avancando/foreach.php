<?php

// Criação do array associativo $contasCorrentes para armazenar informações sobre contas bancárias
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

// Adição de uma nova conta corrente ao array $contasCorrentes
$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

// Iteração sobre o array $contasCorrentes para imprimir informações sobre cada conta
foreach ($contasCorrentes as $cpf => $conta) {
    // Impressão do CPF e nome do titular da conta corrente
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
