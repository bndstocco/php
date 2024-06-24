<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

// Define a classe ControladorDeBonificacoes
class ControladorDeBonificacoes
{
    // Propriedade para armazenar o total de bonificações
    private $totalBonificacoes = 0;

    // Método para adicionar a bonificação de um funcionário ao total de bonificações
    public function aadicionaBonificacaoDe(Funcionario $funcionario)
    {
        // Incrementa o total de bonificações com o valor da bonificação do funcionário
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    // Método para recuperar o total de bonificações
    public function recuperaTotal(): float
    {
        // Retorna o total de bonificações
        return $this->totalBonificacoes;
    }
}
