<?php

namespace Alura\Threads; // Namespace onde a função isPrime está definida

function isPrime(float $number): bool
{
    if ($number === 2) { // Verifica se o número é igual a 2, que é um número primo especial
        return true; // Retorna verdadeiro, pois 2 é primo
    }

    if ($number % 2 === 0) { // Verifica se o número é par
        return false; // Se for par (exceto 2), retorna falso, pois números pares maiores que 2 não são primos
    }

    // Loop para verificar divisibilidade por números ímpares maiores que 2 até a metade do número
    for ($divisor = 3; $divisor < ($number / 2); $divisor += 2) {
        if ($number % $divisor === 0) { // Verifica se o número é divisível pelo divisor atual
            return false; // Se for divisível, retorna falso, pois não é um número primo
        }
    }

    return true; // Se não foi divisível por nenhum número, então é um número primo
}
