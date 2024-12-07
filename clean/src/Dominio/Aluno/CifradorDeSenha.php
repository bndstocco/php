<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Dominio\Aluno;

// Definição da interface CifradorDeSenha
interface CifradorDeSenha
{
    // Método para cifrar uma senha em texto plano e retornar a senha cifrada
    public function cifrar(string $senha): string;
    
    // Método para verificar se uma senha em texto plano corresponde a uma senha cifrada
    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool;
}
