<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];


$conta3 = [
    'titular' => 'bnd',
    'saldo' => 300
];


$contasCorrentes = [
    123 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    1234 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12345 => [
        'titular' => 'bnd',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}