<?php
// Importa as estruturas de dados Stack, Queue e Set da biblioteca Ds (Data Structures)
use Ds\{Stack, Queue, Set};

// Declaração da classe Curso
class Curso
{
    // Propriedades privadas para armazenar os dados do curso
    private Stack $alteracoes;  // Pilha para armazenar alterações feitas no curso
    private Queue $filaDeEsperaDeAlunos;  // Fila para alunos esperando matrícula
    private Set $alunosMatriculados;  // Conjunto de alunos matriculados

    // Construtor que inicializa o nome do curso e as estruturas de dados
    public function __construct(public string $nome)
    {
        // Inicializa a pilha para armazenar alterações
        $this->alteracoes = new Stack();
        // Inicializa a fila para alunos esperando matrícula
        $this->filaDeEsperaDeAlunos = new Queue();
        // Inicializa o conjunto para alunos matriculados
        $this->alunosMatriculados = new Set();
    }

    // Método para adicionar uma alteração à pilha de alterações
    public function adicionaAlteracao(string $alteracao): void
    {
        // Adiciona a alteração ao topo da pilha
        $this->alteracoes->push($alteracao);
    }

    // Método para desfazer a última alteração removendo-a da pilha
    public function desfazAlteracao(): void
    {
        // Remove a última alteração do topo da pilha
        $this->alteracoes->pop();
    }

    // Método para recuperar uma cópia da pilha de alterações
    public function recuperaAlteracoes(): Stack
    {
        // Retorna uma cópia da pilha de alterações para garantir imutabilidade
        return $this->alteracoes->copy();
    }

    // Método para adicionar um aluno à fila de espera
    public function adicionaAlunoParaEspera(Aluno $aluno): void
    {
        // Adiciona o aluno ao final da fila de espera
        $this->filaDeEsperaDeAlunos->push($aluno);
    }

    // Método para recuperar uma cópia da fila de espera de alunos
    public function recuperaAlunosEsperando(): Queue
    {
        // Retorna uma cópia da fila de espera para garantir imutabilidade
        return $this->filaDeEsperaDeAlunos->copy();
    }

    // Método para matricular um aluno adicionando-o ao conjunto de matriculados
    public function matriculaAluno(Aluno $aluno): void
    {
        // Adiciona o aluno ao conjunto de alunos matriculados
        $this->alunosMatriculados->add($aluno);
    }

    // Método para recuperar uma cópia do conjunto de alunos matriculados
    public function recuperaAlunosMatriculados(): Set
    {
        // Retorna uma cópia do conjunto de alunos matriculados para garantir imutabilidade
        return clone $this->alunosMatriculados->copy();
    }
}
