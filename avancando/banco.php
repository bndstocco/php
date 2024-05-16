<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 450
    ]
];

if (500 > $contasCorrentes['123.256.789-12']['saldo'] )
{
    echo "vc n pode sacar esse valor" . PHP_EOL;
} else {
    $contasCorrentes['123.256.789-12']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}

