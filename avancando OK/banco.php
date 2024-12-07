<?php

// Incluindo o arquivo 'funcoes.php', que contém algumas funções auxiliares
require_once 'funcoes.php';

// Definindo um array associativo de contas correntes
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

// Realizando algumas operações nas contas correntes

// Sacando 500 unidades da conta com o CPF '123.456.789-10'
$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

// Sacando 200 unidades da conta com o CPF '123.456.689-11'
$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

// Depositando 900 unidades na conta com o CPF '123.256.789-12'
$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

// Removendo a conta com o CPF '123.456.689-11'
unset($contasCorrentes['123.456.689-11']);

// Convertendo o nome do titular da conta com o CPF '123.256.789-12' para letras maiúsculas
titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Título da página -->
    <h1>Contas correntes</h1>

    <!-- Lista de definição para exibir as contas correntes -->
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <!-- Cada item da lista -->
        <dt>
            <!-- Título da conta - Titular (CPF) -->
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            <!-- Informações da conta - Saldo -->
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>

