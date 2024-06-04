<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    // Define a tarifa de 5%
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    // Método para transferir valor para outra conta
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        // Verifica se há saldo suficiente para a transferência
        if ($valorATransferir > $this->saldo) {
            // Exibe mensagem de saldo insuficiente
            echo "Saldo indisponível";
            return;
        }

        // Realiza o saque do valor a ser transferido
        $this->saca($valorATransferir);
        
        // Deposita o valor na conta de destino
        $contaDestino->deposita($valorATransferir);
    }
}
