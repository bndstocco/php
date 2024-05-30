<?php

class Conta
{
    // Declaração de propriedades privadas
    private $titular; // Armazena o titular da conta
    private $saldo; // Armazena o saldo da conta
    private static $numeroDeContas = 0; // Armazena o número total de contas criadas

    // Método construtor da classe
    public function __construct(Titular $titular)
    {
        // Atribui o titular fornecido à propriedade titular
        $this->titular = $titular;
        // Inicializa o saldo da conta como 0
        $this->saldo = 0;

        // Incrementa o número total de contas criadas
        self::$numeroDeContas++;
    }

    // Método destrutor da classe
    public function __destruct()
    {
        // Decrementa o número total de contas ao destruir a instância da classe
        self::$numeroDeContas--;
    }

    // Método para realizar saques na conta
    public function saca(float $valorASacar): void
    {
        // Verifica se há saldo suficiente para o saque
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        // Deduz o valor do saldo da conta
        $this->saldo -= $valorASacar;
    }

    // Método para realizar depósitos na conta
    public function deposita(float $valorADepositar): void
    {
        // Verifica se o valor do depósito é positivo
        if ($valorADepositar > 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        // Adiciona o valor ao saldo da conta
        $this->saldo += $valorADepositar;
    }

    // Método para transferir saldo para outra conta
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        // Verifica se há saldo suficiente para a transferência
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        // Realiza o saque na conta atual
        $this->saca($valorATransferir);
        // Realiza o depósito na conta de destino
        $contaDestino->deposita($valorATransferir);
    }

    // parei aqui
    // Método para recuperar o saldo da conta
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

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

    // Método estático para recuperar o número total de contas criadas
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
