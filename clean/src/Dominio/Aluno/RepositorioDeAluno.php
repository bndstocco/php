<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Dominio\Aluno;

// Importação da classe Cpf do namespace Alura\Arquitetura\Dominio
use Alura\Arquitetura\Dominio\Cpf;

// Definição da interface RepositorioDeAluno
interface RepositorioDeAluno
{
    // Método para adicionar um aluno ao repositório
    public function adicionar(Aluno $aluno): void;
    
    // Método para buscar um aluno pelo CPF e retornar a instância de Aluno correspondente
    public function buscarPorCpf(Cpf $cpf): Aluno;
    
    // Método para buscar todos os alunos no repositório e retornar um array de instâncias de Aluno
    /** @return Aluno[] */
    public function buscarTodos(): array;
}
