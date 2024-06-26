<?php

// Importa as classes necessárias usando namespaces
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

// Inclui o arquivo que contém o autoload para carregar as classes automaticamente
require_once 'autoload.php';

// Cria uma nova instância de ContaCorrente com um Titular e um Endereço
$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Cidade', 'bairro', 'rua', 'numero')
    )
);

try {
    // Tenta depositar um valor negativo na conta
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    // Captura a exceção do tipo InvalidArgumentException, que é lançada se o valor for negativo
    echo "Valor a depositar precisa ser positivo, seu ráquer perigoso";
}
