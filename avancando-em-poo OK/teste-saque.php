<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular}; // Importa as classes ContaPoupanca, ContaCorrente e Titular do namespace Alura\Banco\Modelo\Conta
use Alura\Banco\Modelo\{CPF, Endereco}; // Importa as classes CPF e Endereco do namespace Alura\Banco\Modelo

require_once 'autoload.php'; // Inclui o arquivo de autoload para carregar automaticamente as classes conforme necessário

$conta = new ContaPoupanca( // Instancia um objeto ContaPoupanca
    new Titular( // Instancia um objeto Titular
        new CPF('123.456.789-10'), // Instancia um objeto CPF com o número fornecido
        'Vinicius Dias', // Define o nome do titular da conta
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37') // Instancia um objeto Endereco com os detalhes do endereço do titular
    )
);
$conta->deposita(500); // Deposita 500 na conta
$conta->saca(100); // Saca 100 da conta

echo $conta->recuperaSaldo(); // Exibe o saldo atual da conta
