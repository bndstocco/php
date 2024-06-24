<?php

class Pessoa
{
    protected $nome; // Declaração da propriedade $nome como protegida
    private $cpf; // Declaração da propriedade $cpf como privada

    public function __construct(string $nome, CPF $cpf) // Método construtor da classe Pessoa
    {
        $this->validaNomeTitular($nome); // Valida o nome do titular
        $this->nome = $nome; // Define o nome do titular
        $this->cpf = $cpf; // Define o CPF do titular
    }

    public function recuperaNome(): string // Método para recuperar o nome do titular
    {
        return $this->nome; // Retorna o nome do titular
    }

    public function recuperaCpf(): string // Método para recuperar o CPF do titular
    {
        return $this->cpf->recuperaNumero(); // Retorna o número do CPF do titular
    }

    protected function validaNomeTitular(string $nomeTitular) // Método para validar o nome do titular (protegido)
    {
        if (strlen($nomeTitular) < 5) { // Verifica se o nome tem menos de 5 caracteres
            echo "Nome precisa ter pelo menos 5 caracteres"; // Exibe uma mensagem de erro
            exit(); // Encerra o script
        }
    }
}
