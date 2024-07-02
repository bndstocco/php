<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Dominio\Aluno;

// Definição da classe Telefone
class Telefone
{
    // Propriedades privadas para armazenar DDD e número do telefone
    private string $ddd;
    private string $numero;

    // Construtor da classe que recebe DDD e número e chama os métodos de validação
    public function __construct(string $ddd, string $numero)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
    }

    // Método privado para validar e definir o DDD
    private function setDdd(string $ddd): void
    {
        if (preg_match('/\d{2}/', $ddd) !== 1) {
            throw new \InvalidArgumentException('DDD inválido');
        }

        $this->ddd = $ddd;
    }

    // Método privado para validar e definir o número do telefone
    private function setNumero(string $numero): void
    {
        if (preg_match('/\d{8,9}/', $numero) !== 1) {
            throw new \InvalidArgumentException('Número de telefone inválido');
        }

        $this->numero = $numero;
    }

    // Método mágico para retornar a representação em string do telefone
    public function __toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }

    // Métodos getter para acessar as propriedades privadas
    public function ddd(): string
    {
        return $this->ddd;
    }

    public function numero(): string
    {
        return $this->numero;
    }
}
