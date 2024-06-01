<?php

class Titular
{
    // Propriedades privadas para armazenar o CPF e o nome do titular
    private $cpf;
    private $nome;

    // Método construtor da classe Titular que recebe um objeto CPF e um nome como parâmetros
    public function __construct(CPF $cpf, string $nome)
    {
        // Atribui o objeto CPF fornecido à propriedade $cpf
        $this->cpf = $cpf;

        // Valida o nome do titular
        $this->validaNomeTitular($nome);

        // Atribui o nome do titular à propriedade $nome
        $this->nome = $nome;
    }

    // Método para recuperar o CPF do titular
    public function recuperaCpf(): string
    {
        // Retorna o número do CPF através do método recuperaNumero() do objeto CPF associado
        return $this->cpf->recuperaNumero();
    }

    // Método para recuperar o nome do titular
    public function recuperaNome(): string
    {
        // Retorna o nome do titular
        return $this->nome;
    }

    // Método privado para validar o nome do titular
    private function validaNomeTitular(string $nomeTitular)
    {
        // Verifica se o nome do titular possui menos de 5 caracteres
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres"; // Se tiver menos de 5 caracteres, exibe uma mensagem de erro
            exit(); // Termina a execução do script
        }
    }
}
