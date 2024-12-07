<?php
// Definindo um array associativo chamado $conta1 com informações de titular e saldo
$conta1 = [
    'titular' => 'Vinicius', // Nome do titular da conta
    'saldo' => 1000          // Saldo da conta
];

// Definindo um array associativo chamado $conta2 com informações de titular e saldo
$conta2 = [
    'titular' => 'Maria',    // Nome do titular da conta
    'saldo' => 10000         // Saldo da conta
];

// Definindo um array associativo chamado $conta3 com informações de titular e saldo
$conta3 = [
    'titular' => 'Alberto',  // Nome do titular da conta
    'saldo' => 300           // Saldo da conta
];

// Criando um array chamado $contasCorrentes que contém os arrays $conta1, $conta2 e $conta3
$contasCorrentes = [$conta1, $conta2, $conta3];

// Iniciando um loop for que irá iterar sobre o array $contasCorrentes
for ($i = 0; $i < count($contasCorrentes); $i++) {
    // Imprimindo o nome do titular da conta na posição $i do array $contasCorrentes, seguido de uma quebra de linha
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
