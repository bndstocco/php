<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

// Define a classe Diretor que herda de Funcionario e implementa a interface Autenticavel
class Diretor extends Funcionario implements Autenticavel
{
    // Método para calcular a bonificação do diretor
    public function calculaBonificacao(): float

    {
        // Retorna o dobro do salário do diretor como bonificação
        return $this->recuperaSalario() * 2;
    }

    // Método para verificar se o diretor pode autenticar com a senha fornecida
    public function podeAutenticar(string $senha): bool
   
    {
        // Verifica se a senha fornecida é igual a '1234'
        return $senha == '1234';
    }
}
