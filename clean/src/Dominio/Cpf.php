<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Dominio;

// Definição da classe Cpf
class Cpf
{
    // Propriedade privada para armazenar o número do CPF
    private string $numero;

    // Construtor da classe que recebe o número do CPF e chama o método de validação
    public function __construct(string $numero)
    {
        $this->setNumero($numero);
    }

    // Método privado para validar e definir o número do CPF
    private function setNumero(string $numero): void
    {
        // Definição das opções de validação do CPF usando expressão regular
        $opcoes = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];
        // Validação do número do CPF
        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException('CPF no formato inválido');
        }

        // Atribuição do número do CPF à propriedade privada
        $this->numero = $numero;
    }

    // Método mágico para retornar a representação em string do CPF
    public function __toString(): string
    {
        return $this->numero;
    }
}
