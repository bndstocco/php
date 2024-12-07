<?php

namespace Alura\Arquitetura\Infra\Aluno; // Define o namespace onde a classe CifradorDeSenhaPhp está localizada

use Alura\Arquitetura\Dominio\Aluno\CifradorDeSenha; // Importa a interface CifradorDeSenha do namespace Dominio\Aluno

class CifradorDeSenhaPhp implements CifradorDeSenha // Declaração da classe CifradorDeSenhaPhp que implementa a interface CifradorDeSenha
{
    public function cifrar(string $senha): string // Implementação do método cifrar da interface CifradorDeSenha
    {
        return password_hash($senha, PASSWORD_ARGON2ID); // Retorna a senha cifrada usando a função password_hash com o algoritmo PASSWORD_ARGON2ID
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool // Implementação do método verificar da interface CifradorDeSenha
    {
        return password_verify($senhaEmTexto, $senhaCifrada); // Verifica se a senha em texto plano corresponde à senha cifrada usando password_verify
    }
}
