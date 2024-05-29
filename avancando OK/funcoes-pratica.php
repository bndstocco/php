<?php
// Função para realizar um saque em uma conta
function sacar(array $conta, float $valorASacar): array
{
    // Verifica se o valor a ser sacado é maior que o saldo da conta
    if ($valorASacar > $conta['saldo']) {
        // Se for, exibe uma mensagem de erro
        exibeMensagem("Você não tem saldo suficiente");
    } elseif ($valorASacar <= 0) { // Verifica se o valor a ser sacado é menor ou igual a zero
        // Se for, exibe uma mensagem de erro
        exibeMensagem("O valor de saque deve ser positivo");
    } else {
        // Caso contrário, realiza o saque subtraindo o valor do saldo da conta
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

// Função para exibir uma mensagem

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

// Função para realizar um depósito em uma conta
function depositar(array $conta, float $valorADepositar): array
{
    // Verifica se o valor a ser depositado é maior que zero
    if ($valorADepositar > 0) {
        // Se for, adiciona o valor ao saldo da conta
        $conta['saldo'] = +$valorADepositar;
    } else {
        exibeMensagem('Depositos precisam ser positivos');
    }
    return $conta;
}

// Função para transformar o titular da conta em letras maiúsculas
function titularComLetrasMaiusculas(array &$conta)
{
    // Converte o nome do titular para letras maiúsculas
    $conta['titular'] = strtoupper($conta['titular']);
}

// Função para exibir os detalhes de uma conta
function exibeConta (array $conta)
{
    // Extrai o titular e o saldo da conta usando desestruturação
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    // Imprime os detalhes da conta em HTML
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

