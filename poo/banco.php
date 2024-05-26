<?php

require_once '../poo/Conta.php'; // Inclui o arquivo Conta.php que contém a definição da classe Conta

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias'); // Cria uma nova instância da classe Conta com CPF e nome do titular
$primeiraConta->deposita(500); // Deposita R$500 na primeira conta
$primeiraConta->saca(300); // Saca R$300 da primeira conta

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL; // Exibe o nome do titular da primeira conta
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL; // Exibe o CPF do titular da primeira conta
echo $primeiraConta->recuperaSaldo() . PHP_EOL; // Exibe o saldo da primeira conta

$segundaConta = new Conta('698.549.548-10', 'Patricia'); // Cria uma segunda instância da classe Conta com CPF e nome do titular
var_dump($segundaConta); // Exibe informações sobre a segunda conta

$outra = new Conta('123', 'Abcdefg'); // Cria uma terceira instância da classe Conta com um CPF inválido e nome do titular
unset($segundaConta); // Destrói a segunda conta
echo Conta::recuperaNumeroDeContas(); // Exibe o número total de contas

