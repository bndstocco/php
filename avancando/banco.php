<?php

function sacar(array $conta, float $valor): array {
    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor");
    } elseif ($valor <= 0) {
        exibeMensagem("O valor de saque deve ser positivo");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function exibeMensagem(string $mensagem): void {
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array {
    if ($valorADepositar <= 0) {
        exibeMensagem("O valor de depósito deve ser positivo");
    } else {
        $conta['saldo'] += $valorADepositar;
    }
    return $conta;
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000.0
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000.0
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 450.0
    ]
];

$contasCorrentes['123.256.789-12'] = sacar($contasCorrentes['123.256.789-12'], 500.0);
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 50.0);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}

$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 900.0);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
