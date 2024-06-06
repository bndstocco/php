<?php

namespace Alura\Banco\Modelo\Conta;

// Definição de uma classe abstrata Conta
abstract class Conta {
    protected float $saldo;
    private Titular $titular;
}

// Propriedade privada para armazenar o titular da conta
// Propriedade estática para contar o número de contas criadas
// Construtor da classe Conta que inicializa o titular e o saldo




// Inicializa o titular da conta
// Inicializa o saldo da conta com zero
// Incrementa o número total de contas criadas
// Método para sacar um valor da conta, considerando uma tarifa
// Calcula a tarifa de saque com base no valor a sacar
// Calcula o valor total do saque incluindo a tarifa
// Verifica se o saldo é suficiente para realizar o saque
// Exibe uma mensagem de erro se o saldo for insuficiente
// Deduz o valor do saque do saldo da conta
// Método para depositar um valor na conta
// Verifica se o valor do depósito é positivo
// Exibe uma mensagem de erro se o valor for inválido
// Adiciona o valor depositado ao saldo da conta
// Método para recuperar o saldo atual da conta
// Método estático para recuperar o número total de contas criadas
// Método abstrato que deve ser implementado pelas subclasses para definir a tarifa
// Método para recuperar o nome do titular da conta
// Método para recuperar o CPF do titular da conta
