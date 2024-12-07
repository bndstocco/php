<?php

namespace Alura\Fp;

class Maybe
{
    private $valor; // O valor encapsulado pela classe Maybe

    public function __construct($valor)
    {
        $this->valor = $valor; // Atribui o valor recebido ao atributo $valor da instância
    }

    public static function of($valor)
    {
        return new self($valor); // Método estático para criar uma nova instância de Maybe com um valor
    }

    public function isNothing(): bool
    {
        return $this->valor === null; // Verifica se o valor é nulo
    }

    public function getOrElse($default)
    {
        return $this->isNothing() ? $default : $this->valor; // Retorna o valor, ou um valor padrão se for nulo
    }

    public function map(callable $fn)
    {
        if ($this->isNothing()) {
            // Se o valor for nulo, retorna uma nova instância Maybe com o mesmo valor nulo
            return Maybe::of($this->valor);
        }
        // Aplica a função $fn ao valor encapsulado
        $valor = $fn($this->valor);

        // Retorna uma nova instância Maybe com o resultado da função aplicada
        return Maybe::of($valor);
    }
}
