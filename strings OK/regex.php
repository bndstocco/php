<?php

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222']; // Define um array de números de telefone

foreach ($telefones as $telefone) { // Percorre cada telefone no array
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/'; // Define a expressão regular para validar o formato do telefone
    $telefoneValido = preg_match( // Usa preg_match para verificar se o telefone corresponde ao regex
        $regex,
        $telefone,
        $correspondencia // Armazena as correspondências encontradas
    );

    if ($telefoneValido) { // Se o telefone for válido (corresponde ao regex)
        echo 'Telefone válido' . PHP_EOL; // Imprime 'Telefone válido'
    } else { // Se o telefone não for válido
        echo 'Telefone inválido' . PHP_EOL; // Imprime 'Telefone inválido'
    }

    echo preg_replace( // Usa preg_replace para substituir parte do telefone baseado no regex
        $regex, // Expressão regular
        '(XX) \2', // Padrão de substituição, onde \2 refere-se ao segundo grupo de captura no regex
        $telefone // Telefone de entrada
    ) . PHP_EOL; // Imprime o telefone modificado seguido de uma nova linha
}
