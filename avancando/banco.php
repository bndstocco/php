<?php

function exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}



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
    exibeMensagem(mensagem: "vc n pode sacar esse valor");
} else {
    $contasCorrentes['123.256.789-12']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}

