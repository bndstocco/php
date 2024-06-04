<?php

class Funcionario extends Pessoa // Classe Funcionario herda da classe Pessoa
{
    private $cargo; // Declaração da propriedade $cargo

    public function __construct(string $nome, CPF $cpf, string $cargo) // Método construtor da classe Funcionario
    {
        parent::__construct($nome, $cpf); // Chama o construtor da classe pai (Pessoa) passando o nome e CPF do funcionário
        $this->cargo = $cargo; // Define o cargo do funcionário
    }

    public function recuperaCargo(): string // Método para recuperar o cargo do funcionário
    {
        return $this->cargo; // Retorna o cargo do funcionário
    }

    public function alteraNome(string $nome): void // Método para alterar o nome do funcionário
    {
        $this->validaNomeTitular($nome); // Valida o nome do titular
        $this->nome = $nome; // Define o novo nome do funcionário
    }
}
