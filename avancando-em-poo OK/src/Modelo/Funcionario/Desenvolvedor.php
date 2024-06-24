<?php

namespace Alura\Banco\Modelo\Funcionario;

// Define a classe Desenvolvedor que herda de Funcionario
class Desenvolvedor extends Funcionario
{
    // Método para promover o desenvolvedor de nível
    public function sobeDeNivel()
    {
        // Aumenta o salário do desenvolvedor em 75%
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    // Método para calcular a bonificação do desenvolvedor
    public function calculaBonificacao(): float
    {
        // Retorna uma bonificação fixa de 500.0
        return 500.0;
    }
}
