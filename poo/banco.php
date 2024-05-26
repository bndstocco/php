<?php

// Incluindo as classes necessárias
require_once '../poo/Conta.php';
require_once '../poo/Titular.php';
require_once '../poo/CPF.php';

// Criando um novo titular (Vinicius) com CPF e nome
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias');

// Criando a primeira conta associada ao titular Vinicius
$primeiraConta = new Conta($vinicius);

// Depositando 500 na primeira conta
$primeiraConta->deposita(500);

// Sacando 300 da primeira conta
$primeiraConta->saca(300); // isso é ok

// Exibindo o nome do titular da primeira conta
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

// Exibindo o CPF do titular da primeira conta
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

// Exibindo o saldo da primeira conta
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

// Criando um novo titular (Patricia) com CPF e nome
$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');

// Criando a segunda conta associada ao titular Patricia
$segundaConta = new Conta($patricia);

// Exibindo informações sobre a segunda conta
var_dump($segundaConta);

// Criando uma nova conta sem atribuir a uma variável
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));

// Removendo a referência para a segunda conta
unset($segundaConta);

// Exibindo o número total de contas criadas
echo Conta::recuperaNumeroDeContas();
