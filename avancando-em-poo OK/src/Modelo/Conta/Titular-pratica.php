<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

// Define a classe Titular que herda de Pessoa
class Titular extends Pessoa
{
    // Propriedade privada para armazenar o endereço do titular
    private Endereco $endereco;
    // Construtor da classe Titular
    public function __construct (CPF $cpf, string $nome, Endereco $endereco)
    {
        // Chama o construtor da classe Pai (Pessoa) para inicializar o CPF e o nome
        parent::__construct($nome, $cpf);
        // Inicializa o endereço do titular
        $this->endereco = $endereco;
    }

    // Método para recuperar o endereço do titular
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
