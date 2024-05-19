<?php

$texto = 'Texto com qualquer coisa poxa e caramba'; // Define a string de entrada

// Usa str_replace para substituir 'poxa' por 'p' e 'caramba' por 'c'
echo str_replace(
    ['poxa', 'caramba'], // Array de strings a serem substituídas
    ['p', 'c'],          // Array de strings de substituição
    $texto               // String de entrada
) . PHP_EOL;             // Adiciona uma nova linha ao final da saída

// Usa strtr para substituir caracteres individuais conforme o mapeamento fornecido
echo strtr($texto, 'poxa', '***@') . PHP_EOL; // Substitui 'p' por '*', 'o' por '*', 'x' por '*', e 'a' por '@'

// Usa strtr para substituir 'poxa' por 'p' e 'caramba' por 'c' usando um array associativo
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL; // Substitui 'poxa' por 'p' e 'caramba' por 'c'
