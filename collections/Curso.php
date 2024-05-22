<?php

class Curso
{
    // Propriedade privada para armazenar a pilha de alterações
    private SplStack $alteracoes;
    
    // Propriedade privada para armazenar a fila de espera de alunos
    private SplQueue $filaDeEsperaDeAlunos;

    // Construtor da classe que inicializa as propriedades e define o nome do curso
    public function __construct(public string $nome)
    {
        // Inicializa a pilha de alterações
        $this->alteracoes = new SplStack();
        
        // Inicializa a fila de espera de alunos
        $this->filaDeEsperaDeAlunos = new SplQueue();
    }

    // Método para adicionar uma alteração à pilha
    public function adicionaAlteracao(string $alteracao): void
    {
        // Adiciona a alteração ao topo da pilha
        $this->alteracoes->push($alteracao);
    }

    // Método para recuperar as alterações, retornando um clone da pilha
    public function recuperaAlteracoes(): SplStack
    {
        // Retorna um clone da pilha de alterações
        return clone $this->alteracoes;
    }

    // Método para adicionar um aluno à fila de espera
    public function adicionaAlunoParaEspera(string $aluno): void
    {
        // Adiciona o aluno à fila de espera
        $this->filaDeEsperaDeAlunos->enqueue($aluno);
    }

    // Método para recuperar a fila de alunos esperando, retornando um clone da fila
    public function recuperaAlunosEsperando(): SplQueue
    {
        // Retorna um clone da fila de espera de alunos
        return clone $this->filaDeEsperaDeAlunos;
    }
}
