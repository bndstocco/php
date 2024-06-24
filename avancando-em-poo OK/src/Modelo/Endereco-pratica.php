<?php

namespace Alura\Banco\Modelo;

// Define a classe Endereco
class Endereco
{
    // Propriedades privadas para armazenar os detalhes do endereço
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;
    // Construtor da classe Endereco
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        // Inicializa as propriedades do endereço com os valores fornecidos
       $this->cidade = $cidade;
       $this->bairro = $bairro;
       $this->rua = $rua;
       $this->numero = $numero;
    }
}
