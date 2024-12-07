<?php

// Definição da função funcao1
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        // Chama a função funcao2 dentro de um bloco try
        funcao2();
    } catch (Throwable $problema) {
        // Captura qualquer exceção do tipo Throwable (e suas subclasses)
        echo $problema->getMessage() . PHP_EOL;   // Exibe a mensagem da exceção
        echo $problema->getLine() . PHP_EOL;      // Exibe a linha onde a exceção ocorreu
        echo $problema->getTraceAsString() . PHP_EOL; // Exibe o rastreamento da pilha da exceção
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

// Definição da função funcao2
function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    // Tenta realizar uma operação inválida (divisão por zero)
    intdiv(1, 0);

    // A linha a seguir nunca será alcançada devido ao erro acima
    throw new BadFunctionCallException('Essa é a mensagem de exceção');

    echo 'Saindo da função 2' . PHP_EOL; // Esta linha não será executada após a exceção
}

// Início do programa principal
echo 'Iniciando o programa principal' . PHP_EOL;

// Chama a função funcao1
funcao1();

// Fim do programa principal
echo 'Finalizando o programa principal' . PHP_EOL;
