<?php

namespace Alura\Banco\Modelo; // Certifique-se de que o namespace está correto

class Endereco
{
    private $cidade;
    private $bairro;
    private $logradouro;
    private $numero;

    // Construtor e outros métodos...

    // Método mágico para converter o objeto Endereco em uma string
    public function __toString(): string
    {
        return "{$this->logradouro}, {$this->numero} - {$this->bairro}, {$this->cidade}";
    }
}
