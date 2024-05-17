<?php

function sacar($conta, $valor) {
    if ($valor > $conta['saldo']) {
        exibeMensagem("vc n pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function exibeMensagem($mensagem) {
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

$contasCorrentes['123.256.789-12'] = sacar($contasCorrentes['123.256.789-12'], 500);
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 5000);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
