<?php
namespace Alura\Banco\Modelo; // Define o namespace da classe Endereco

class Endereco
{
    private $cidade; // Declaração da propriedade $cidade
    private $bairro; // Declaração da propriedade $bairro
    private $logradouro; // Declaração da propriedade $logradouro
    private $numero; // Declaração da propriedade $numero

    // Construtor e outros métodos...

    // Método mágico para converter o objeto Endereco em uma string
    public function __toString(): string // Método mágico __toString
    {
        return "{$this->logradouro}, {$this->numero} - {$this->bairro}, {$this->cidade}"; // Retorna uma representação em string do endereço
    }
}
