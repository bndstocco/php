<?php

namespace Alura\Banco\Modelo\Conta;

// Definição de uma classe abstrata Conta
abstract class Conta
{
    // Propriedade protegida para armazenar o saldo da conta
    protected float $saldo;
    
    // Propriedade privada para armazenar o titular da conta
    private Titular $titular;
    
    // Propriedade estática para contar o número de contas criadas
    private static int $numeroDeContas = 0;

    // Construtor da classe Conta que inicializa o titular e o saldo
    public function __construct(Titular $titular)
    {
        // Inicializa o titular da conta
        $this->titular = $titular;
        
        // Inicializa o saldo da conta com zero
        $this->saldo = 0;
        
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
    public function deposita(float $valorADepositar): void
    {
        // Verifica se o valor do depósito é positivo
        if ($valorADepositar <= 0) {
            // Exibe uma mensagem de erro se o valor for inválido
            echo "Valor do depósito deve ser positivo";
            return;
        }
        
        // Adiciona o valor depositado ao saldo da conta
        $this->saldo += $valorADepositar;
    }

    // Método para recuperar o saldo atual da conta
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    // Método estático para recuperar o número total de contas criadas
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    // Método abstrato que deve ser implementado pelas subclasses para definir a tarifa
    abstract protected function percentualTarifa(): float;

    // Método para recuperar o nome do titular da conta
    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    // Método para recuperar o CPF do titular da conta
    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
}
