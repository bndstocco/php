<?php

// Importa as estruturas de dados Stack, Queue e Set da biblioteca Ds (Data Structures)
use Ds\{Stack, Queue, Set};
// Declaração da classe Curso
Class Curso{
// Propriedades privadas para armazenar os dados do curso

// Pilha para armazenar alterações feitas no curso
private Stack $alteracoes;
// Fila para alunos esperando matrícula
private Queue $filaDeEsperaDeAlunos;
// Conjunto de alunos matriculados
private Set $alunosMatriculados;

// Construtor que inicializa o nome do curso e as estruturas de dados
public function __construct(public string $nome);
{
// Inicializa a pilha para armazenar alterações
$this->alteracoes = new Stack;
}

// Inicializa a fila para alunos esperando matrícula
// Inicializa o conjunto para alunos matriculados


}


// Método para adicionar uma alteração à pilha de alterações
// Adiciona a alteração ao topo da pilha
// Método para desfazer a última alteração removendo-a da pilha
// Remove a última alteração do topo da pilha
// Método para recuperar uma cópia da pilha de alterações
// Retorna uma cópia da pilha de alterações para garantir imutabilidade
// Método para adicionar um aluno à fila de espera
// Adiciona o aluno ao final da fila de espera
// Método para recuperar uma cópia da fila de espera de alunos
// Retorna uma cópia da fila de espera para garantir imutabilidade
// Método para matricular um aluno adicionando-o ao conjunto de matriculados
// Adiciona o aluno ao conjunto de alunos matriculados
// Método para recuperar uma cópia do conjunto de alunos matriculados
// Retorna uma cópia do conjunto de alunos matriculados para garantir imutabilidade
