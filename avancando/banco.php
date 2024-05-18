<?php

require_once 'functions.php';

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


titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}

$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 900.0);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );



}
