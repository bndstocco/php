<?php

namespace Alura\Arquitetura\Infra\Aluno; // Define o namespace onde a classe CifradorDeSenhaMd5 está localizada

use Alura\Arquitetura\Dominio\Aluno\CifradorDeSenha; // Importa a interface CifradorDeSenha do namespace Dominio\Aluno

class CifradorDeSenhaMd5 implements CifradorDeSenha // Declaração da classe CifradorDeSenhaMd5 que implementa a interface CifradorDeSenha
{
    public function cifrar(string $senha): string // Implementação do método cifrar da interface CifradorDeSenha
    {
        return md5($senha); // Retorna a senha cifrada usando MD5
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool // Implementação do método verificar da interface CifradorDeSenha
    {
        return md5($senhaEmTexto) === $senhaCifrada; // Verifica se a senha em texto plano corresponde à senha cifrada usando MD5
    }
}
