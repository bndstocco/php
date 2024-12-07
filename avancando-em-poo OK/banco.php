<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular; // Importa a classe Titular do namespace Alura\Banco\Modelo\Conta
use Alura\Banco\Modelo\Endereco; // Importa a classe Endereco do namespace Alura\Banco\Modelo
use Alura\Banco\Modelo\CPF; // Importa a classe CPF do namespace Alura\Banco\Modelo
use Alura\Banco\Modelo\Conta\ContaCorrente; // Importa a classe ContaCorrente do namespace Alura\Banco\Modelo\Conta

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B'); // Instancia um objeto Endereco
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco); // Instancia um objeto Titular
$primeiraConta = new ContaCorrente($vinicius); // Instancia uma ContaCorrente associada ao titular $vinicius
$primeiraConta->deposita(500); // Deposita 500 na primeira conta
$primeiraConta->saca(300); // Realiza um saque de 300 na primeira conta

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL; // Exibe o nome do titular da primeira conta
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL; // Exibe o CPF do titular da primeira conta
echo $primeiraConta->recuperaSaldo() . PHP_EOL; // Exibe o saldo da primeira conta

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco); // Instancia um novo objeto Titular para Patricia
$segundaConta = new ContaCorrente($patricia); // Instancia uma ContaCorrente associada ao titular Patricia
var_dump($segundaConta); // Exibe informações sobre a segunda conta

$outroEndereco = new Endereco('A', 'b', 'c', '1D'); // Instancia um novo objeto Endereco
$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco)); // Instancia uma nova ContaCorrente com um titular diferente
unset($segundaConta); // Remove a referência para a segunda conta
echo ContaCorrente::recuperaNumeroDeContas(); // Exibe o número total de contas criadas
