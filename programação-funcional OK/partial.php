<?php

// Definição da função dividir
function dividir($a, $b) {
    return $a / $b;
}

// Definição da função dividirPor que retorna uma função
function dividirPor(int $divisor) {
    // Aqui retornamos uma função anônima que usa o valor de $divisor capturado pelo 'use'
    return function ($numero) use ($divisor) {
        // Dentro dessa função anônima, chamamos a função dividir com $numero e $divisor
        return dividir($numero, $divisor);
    };
}

// Criamos uma função dividirPor2 que é o resultado de dividirPor(2)
$dividirPor2 = dividirPor(2);

// Testamos a função criada com diferentes valores
echo $dividirPor2(4) . PHP_EOL;   // Saída: 2
echo $dividirPor2(5) . PHP_EOL;   // Saída: 2.5
echo $dividirPor2(10) . PHP_EOL;  // Saída: 5
