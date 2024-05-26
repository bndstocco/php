<?php

class Conta
{
    private $cpfTitular; // Declaração da variável privada que armazena o CPF do titular da conta
    private $nomeTitular; // Declaração da variável privada que armazena o nome do titular da conta
    private $saldo; // Declaração da variável privada que armazena o saldo da conta
    private static $numeroDeContas = 0; // Declaração da variável estática que armazena o número total de contas

    public function __construct(string $cpfTitular, string $nomeTitular) // Método construtor que é chamado ao criar uma nova instância da classe Conta
    {
        $this->cpfTitular = $cpfTitular; // Atribui o CPF do titular à variável cpfTitular
        $this->validaNomeTitular($nomeTitular); // Chama o método para validar o nome do titular
        $this->nomeTitular = $nomeTitular; // Atribui o nome do titular à variável nomeTitular
        $this->saldo = 0; // Inicializa o saldo da conta com zero

        self::$numeroDeContas++; // Incrementa o número de contas ao criar uma nova conta
    }

    public function __destruct() // Método destrutor que é chamado ao destruir uma instância da classe Conta
    {
        self::$numeroDeContas--; // Decrementa o número de contas ao destruir uma conta
    }

    public function saca(float $valorASacar): void // Método para sacar um valor da conta
    {
        if ($valorASacar > $this->saldo) { // Verifica se o valor a sacar é maior que o saldo
            echo "Saldo indisponível"; // Exibe uma mensagem de saldo indisponível
            return; // Retorna sem realizar a operação
        }

        $this->saldo -= $valorASacar; // Subtrai o valor a sacar do saldo
    }

    public function deposita(float $valorADepositar): void // Método para depositar um valor na conta
    {
        if ($valorADepositar <= 0) { // Verifica se o valor a depositar é menor ou igual a zero
            echo "Valor precisa ser positivo"; // Exibe uma mensagem de valor inválido
            return; // Retorna sem realizar a operação
        }

        $this->saldo += $valorADepositar; // Adiciona o valor a depositar ao saldo
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void // Método para transferir um valor para outra conta
    {
        if ($valorATransferir > $this->saldo) { // Verifica se o valor a transferir é maior que o saldo
            echo "Saldo indisponível"; // Exibe uma mensagem de saldo indisponível
            return; // Retorna sem realizar a operação
        }

        $this->saca($valorATransferir); // Chama o método saca para subtrair o valor do saldo
        $contaDestino->deposita($valorATransferir); // Chama o método deposita da conta de destino para adicionar o valor
    }

    public function recuperaSaldo(): float // Método para recuperar o saldo da conta
    {
        return $this->saldo; // Retorna o saldo
    }

    public function recuperaCpfTitular(): string // Método para recuperar o CPF do titular da conta
    {
        return $this->cpfTitular; // Retorna o CPF do titular
    }

    public function recuperaNomeTitular(): string // Método para recuperar o nome do titular da conta
    {
        return $this->nomeTitular; // Retorna o nome do titular
    }

    private function validaNomeTitular(string $nomeTitular) // Método privado para validar o nome do titular
    {
        if (strlen($nomeTitular) < 5) { // Verifica se o nome do titular tem menos de 5 caracteres
            throw new Exception("Nome precisa ter pelo menos 5 caracteres"); // Lança uma exceção se o nome for inválido
        }
    }

    public static function recuperaNumeroDeContas(): int // Método estático para recuperar o número total de contas
    {
        return self::$numeroDeContas; // Retorna o número total de contas
    }
}
