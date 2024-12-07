<?php

// Definindo um array associativo chamado $conta1 com informações de titular e saldo
// Nome do titular da conta
// Saldo da conta
$conta1 = [
    'titular da conta' => 'bnd',
    'saldo' => 2000
];

// Definindo um array associativo chamado $conta2 com informações de titular e saldo
// Nome do titular da conta
// Saldo da conta
$conta2 = [
    'titular da conta' => 'josue',
    'saldo' => 1000
];


// Definindo um array associativo chamado $conta3 com informações de titular e saldo
// Nome do titular da conta
// Saldo da conta
$conta3 = [
    'titular da conta' => 'pedro',
    'saldo' => 500
];

// Criando um array chamado $contasCorrentes que contém os arrays $conta1, $conta2 e $conta3
$contasCorrentes = [$conta1, $conta2, $conta3];

// Iniciando um loop for que irá iterar sobre o array $contasCorrentes
for ($i = 0; $i < count($contasCorrentes); $i++) {
// Imprimindo o nome do titular da conta na posição $i do array $contasCorrentes, seguido de uma quebra de linha
echo $contasCorrentes[$i]['titular da conta'] . PHP_EOL;
}

