<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa; // Importa a classe Pessoa para poder extender dela

// Define a classe abstrata Funcionario que herda de Pessoa
abstract class Funcionario extends Pessoa
{
    private $salario;

    // Construtor da classe Funcionario
    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        // Chama o construtor da classe Pai (Pessoa) para inicializar o nome e o CPF
        parent::__construct($nome, $cpf);
        
        // Inicializa o salário do funcionário
        $this->salario = $salario;
    }

    // Método para aumentar o salário do funcionário
    public function recebeAumento(float $valorAumento): void
    {
        // Verifica se o valor do aumento é positivo
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        // Adiciona o aumento ao salário atual
        $this->salario += $valorAumento;
    }

    // Método para recuperar o salário do funcionário
    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    // Método abstrato para calcular a bonificação do funcionário (deve ser implementado nas classes filhas)
    abstract public function calculaBonificacao(): float;
}
