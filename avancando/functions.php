<?php

function sacar(array $conta, float $valor): array {
    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor");
    } elseif ($valor <= 0) {
        exibeMensagem("O valor de saque deve ser positivo");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function exibeMensagem(string $mensagem): void {
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array {
    if ($valorADepositar <= 0) {
        exibeMensagem("O valor de depósito deve ser positivo");
    } else {
        $conta['saldo'] += $valorADepositar;
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta): array {
    
    $conta['titular'] = strtoupper($conta['titular']);
    return $conta;
}
