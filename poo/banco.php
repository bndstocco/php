<?php


// Inclui o arquivo Conta.php, onde está definida a classe Conta
require_once 'src/Conta.php';

// Cria uma nova instância da classe Conta e a armazena na variável $primeiraConta
$primeiraConta = new Conta();

// Deposita 500 unidades monetárias na conta $primeiraConta
$primeiraConta->deposita(500);

// Tenta sacar 300 unidades monetárias da conta $primeiraConta
$primeiraConta->saca(300); // isso é ok

// Define o CPF do titular da conta $primeiraConta como '123.456.789-10'
$primeiraConta->defineCpfTitular('123.456.789-10');

// Exibe o saldo atual da conta $primeiraConta
echo $primeiraConta->recuperaSaldo();

// Exibe o CPF do titular da conta $primeiraConta
echo $primeiraConta->recuperaCpfTitular();
