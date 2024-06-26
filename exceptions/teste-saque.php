<?php

// Importa classes utilizando o recurso de agrupamento de namespaces
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

// Inclui o arquivo que contém o autoload para carregar as classes automaticamente
require_once 'autoload.php';

// Cria uma nova instância de ContaPoupanca com um Titular e um Endereço
$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);

// Deposita um valor inicial de 500 na conta
$conta->deposita(500);

try {
    // Tenta sacar um valor maior do que o saldo disponível na conta (600)
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    // Captura a exceção SaldoInsuficienteException, que é lançada se não houver saldo suficiente para o saque
    echo "Você não tem saldo suficiente para realizar este saque." . PHP_EOL;
    echo $exception->getMessage(); // Exibe a mensagem específica da exceção
}

// Exibe o saldo atual da conta após tentativa de saque
echo $conta->recuperaSaldo();
