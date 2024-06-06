<?php

namespace Alura\Banco\Modelo\Conta;

// Definição de uma classe abstrata Conta
abstract class Conta {
    protected float $saldo;
    private Titular $titular;

    private static int $numeroDeContas = 0;
}


// Construtor da classe Conta que inicializa o titular e o saldo

public function __construct(Titular $titular)
{
// Inicializa o titular da conta
$this->$titular = $titular;
// Inicializa o saldo da conta com zero
$this->$saldo = 0;
// Incrementa o número total de contas criadas
self::$numeroDeContas++;

}
 // Método para sacar um valor da conta, considerando uma tarifa
 public function saca(float $valorASacar): void
 {
     // Calcula a tarifa de saque com base no valor a sacar
     $tarifaSaque = $valorASacar * $this->percentualTarifa();
     
     // Calcula o valor total do saque incluindo a tarifa
     $valorSaque = $valorASacar + $tarifaSaque;
     
     // Verifica se o saldo é suficiente para realizar o saque
     if ($valorSaque > $this->saldo) {
         // Exibe uma mensagem de erro se o saldo for insuficiente
         echo "Saldo insuficiente para saque";
         return;
     }
     
     // Deduz o valor do saque do saldo da conta
     $this->saldo -= $valorSaque;
 }







// Método para depositar um valor na conta
// Verifica se o valor do depósito é positivo
// Exibe uma mensagem de erro se o valor for inválido
// Adiciona o valor depositado ao saldo da conta
// Método para recuperar o saldo atual da conta
// Método estático para recuperar o número total de contas criadas
// Método abstrato que deve ser implementado pelas subclasses para definir a tarifa
// Método para recuperar o nome do titular da conta
// Método para recuperar o CPF do titular da conta
