<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

// Define a classe Autenticador
class Autenticador
{
    // Método para tentar fazer login com um objeto autenticável e uma senha fornecida
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        // Verifica se o objeto autenticável pode autenticar com a senha fornecida
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema";
        } else {
            echo "Ops. Senha incorreta.";
        }
    }
}
