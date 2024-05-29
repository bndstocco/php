<?php

// Criação do array associativo $contasCorrentes para armazenar informações sobre contas bancárias
$contasCorrentes = [
    '038.928.540-41' => [
        'titular'=> 'bnd',
        'saldo' => 3000
    ],
    '038.928.540-42' => [
        'titular'=> 'pedro',
        'saldo' => 2000
    ],
    '038.928.540-43' => [
        'titular'=> 'joao',
        'saldo' => 1000
    ],
];

// Adição de uma nova conta corrente ao array $contasCorrentes
$contasCorrentes['038.928.540-44'] = [
    'titular' => 'bnd',
    'saldo' => 3000
];

// Iteração sobre o array $contasCorrentes para imprimir informações sobre cada conta
foreach ($contasCorrentes as $cpf => $conta) {
// Impressão do CPF e nome do titular da conta corrente
echo $cpf . " " . $conta['titular'] . PHP_EOL;
}