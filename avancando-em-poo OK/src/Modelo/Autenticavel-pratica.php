<?php

namespace Alura\Banco\Modelo;

// Define a interface Autenticavel
interface Autenticavel
{
    // Método que verifica se pode autenticar com a senha fornecida
    public function podeAutenticar(string $senha): bool;
}
