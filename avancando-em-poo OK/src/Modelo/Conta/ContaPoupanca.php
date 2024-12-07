<?php

namespace Alura\Banco\Modelo\Conta;

// Define a classe ContaPoupanca que herda de Conta
class ContaPoupanca extends Conta
{
    // Define a tarifa de 3%
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}
