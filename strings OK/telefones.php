<?php

$telefones = ['(24) 99999 - 9999 ', ' (21) 99999 - 9999', '(24) 2222 - 2222']; // Define um array de números de telefone

// Usa implode para unir os elementos do array em uma única string, separados por ', '
// Parâmetros nomeados são usados para passar o array e o separador para a função implode
echo implode(array: $telefones, separator: ', ') . PHP_EOL; // Imprime a string resultante seguida de uma nova linha
