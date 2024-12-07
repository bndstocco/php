<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

// Define a classe Gerente que herda de Funcionario e implementa a interface Autenticavel
class Gerente extends Funcionario implements Autenticavel
{
    // Método para calcular a bonificação do gerente
    public function calculaBonificacao(): float
    {
        // Retorna o salário do gerente como bonificação
        return $this->recuperaSalario();
    }

    // Método para verificar se o gerente pode autenticar com a senha fornecida
    public function podeAutenticar(string $senha): bool
    {
        // Verifica se a senha fornecida é igual a '4321'
        return $senha === '4321';
    }
}
