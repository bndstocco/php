<?php

namespace Alura\Banco\Modelo;

// Define a classe abstrata Pessoa
abstract class Pessoa
{
    // Propriedades protegida e privada para armazenar nome e CPF da pessoa
    protected string $nome;
    private CPF $cpf;

    // Construtor da classe Pessoa
    public function __construct(string $nome, CPF $cpf)
    {
        // Inicializa o nome e o CPF da pessoa com os valores fornecidos
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    // Método para recuperar o nome da pessoa
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    // Método para recuperar o CPF da pessoa
    public function recuperaCpf(): string
    {
        // Retorna o número do CPF através do método recuperaNumero() da classe CPF associada
        return $this->cpf->recuperaNumero();
    }
}
