<?php

// Declaração da função 'a' que retorna um inteiro
function a(): int
{
    try {
        // Tenta executar este bloco de código
        echo "Código";
        // Retorna 0 se não houver exceção
        return 0;
    } catch (Throwable $e) {
        // Captura qualquer exceção lançada no bloco 'try'
        echo "Problema";
        // Retorna 1 se uma exceção for capturada
        return 1;
    } finally {
        // Este bloco é executado sempre, independentemente de uma exceção ter sido lançada ou não
        echo "Final da função";
    }
}

// Chama a função 'a' e exibe seu valor de retorno
echo a();
