<?php

// Incluindo o arquivo 'funcoes.php', que contém algumas funções auxiliares
require_once '../avancando/funcoes.php';

// Definindo um array associativo de contas correntes
$contasCorrentes = [
    '038.928.540-41' => [
        'titular' => 'Maria',
        'saldo' => 1000
    ],
    '038.928.540-42' => [
        'titular' => 'jose',
        'saldo' => 2000
    ],
    '038.928.540-43' => [
        'titular' => 'joao',
        'saldo' => 5000
    ],
];
// Realizando algumas operações nas contas correntes
// Sacando 500 unidades da conta com o CPF '123.456.789-10'
$contasCorrentes['038.928.540-41'] = sacar (
    $contasCorrentes['038.928.540-41'],
    300
);
// Sacando 200 unidades da conta com o CPF '123.456.689-11'
$contasCorrentes['038.928.540-42'] = sacar (
    $contasCorrentes['038.928.540-42'],
    200
);
// Depositando 900 unidades na conta com o CPF '123.256.789-12'
$contasCorrentes['038.928.540-43'] = depositar (
    $contasCorrentes['038.928.540-43'],
    900
);
// Removendo a conta com o CPF '123.456.689-11'
unset($contasCorrentes['038.928.540-42']);

// Convertendo o nome do titular da conta com o CPF '123.256.789-12' para letras maiúsculas
titularComLetrasMaiusculas($contasCorrentes['038.928.540-41']);
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

