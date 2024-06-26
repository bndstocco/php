<?php

/**
 * Declaração de uma função que pode lançar uma exceção
 * 
 * @throws Exception
 */
function funcaoQueLancaExcecao()
{
    // Função que pode lançar uma exceção
    // O código que lança a exceção não está implementado
}

// Declaração de outra função
function outraFuncao()
{
    // Chama a função que pode lançar uma exceção
    funcaoQueLancaExcecao();
}
