<?php

// Define a classe Conta
class Conta
{
    // Declaração de propriedades da classe
    private $cpfTitular; // Propriedade privada para armazenar o CPF do titular da conta
    private $nomeTitular; // Propriedade privada para armazenar o nome do titular da conta
    private $saldo = 0; // Propriedade privada para armazenar o saldo inicial da conta, inicializado como 0

    // Método público para realizar saque na conta
    public function saca(float $valorASacar): void
    {
        // Verifica se o valor a sacar é maior que o saldo disponível na conta
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível"; // Exibe mensagem de saldo indisponível
            return; // Retorna, encerrando a execução do método
        }

        $this->saldo -= $valorASacar; // Subtrai o valor a sacar do saldo da conta
    }

    // Método público para realizar depósito na conta
    public function deposita(float $valorADepositar): void
    {
        // Verifica se o valor a depositar é negativo
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo"; // Exibe mensagem de que o valor precisa ser positivo
            return; // Retorna, encerrando a execução do método
        }

        $this->saldo += $valorADepositar; // Adiciona o valor depositado ao saldo da conta
    }

    // Método público para realizar transferência entre contas
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        // Verifica se o valor a transferir é maior que o saldo disponível na conta
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível"; // Exibe mensagem de saldo indisponível
            return; // Retorna, encerrando a execução do método
        }

        $this->saca($valorATransferir); // Chama o método saca para retirar o valor da conta atual
        $contaDestino->deposita($valorATransferir); // Chama o método deposita da conta destino para adicionar o valor transferido
    }

    // Método público para recuperar o saldo da conta
    public function recuperaSaldo(): float
    {
        return $this->saldo; // Retorna o saldo da conta
    }

    // Método público para definir o CPF do titular da conta
    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf; // Define o CPF do titular da conta
    }

    // Método público para recuperar o CPF do titular da conta
    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular; // Retorna o CPF do titular da conta
    }

    // Método público para definir o nome do titular da conta
    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome; // Define o nome do titular da conta
    }

    // Método público para recuperar o nome do titular da conta
    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular; // Retorna o nome do titular da conta
    }
}