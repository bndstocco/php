<?php

// Configura para exibir todos os tipos de erros
error_reporting(E_ALL);

// Define para exibir os erros na tela
ini_set('display_errors', 1);

// Define uma função personalizada para manipulação de erros
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // Verifica o tipo de erro
    switch ($errno) {
        // Caso o erro seja do tipo aviso (warning)
        case E_WARNING:
            echo "Aviso: Isso é perigoso";
            break;
        // Caso o erro seja do tipo nota (notice)
        case E_NOTICE:
            echo "Melhor não fazer isso";
            break;
    }
});

// Tentativa de exibir o valor de uma variável não definida
echo $variavel;

// Tentativa de acessar um índice inexistente em um array
echo $array[12];

// Define uma constante chamada 'CONSTANTE'
define('CONSTANTE', 'Valor da constante');

// Exibe o valor da constante definida
echo CONSTANTE;
