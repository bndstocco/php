<?php

namespace Alura\Banco\Modelo;

// Define a classe CPF
class CPF
{
    // Propriedade privada para armazenar o número do CPF
    private string $numero;

    // Construtor da classe CPF
    public function __construct(string $numero)
    {
        // Inicializa o número do CPF com o valor fornecido
        $this->numero = $numero;
    }

    // Método para recuperar o número do CPF
    public function recuperaNumero(): string
    {
        // Retorna o número do CPF
        return $this->numero;
    }
}
