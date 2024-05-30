<?php

// Inclui os arquivos das classes Curso e Aluno
require_once 'Curso.php';
require_once 'Aluno.php';

// Cria uma nova instância da classe Curso com o nome 'Collections com PHP'
$curso = new Curso('Collections com PHP');

// Adiciona três alterações ao curso
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

// Itera sobre as alterações do curso e imprime cada uma delas
foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao . PHP_EOL;
}

// Adiciona três alunos à lista de espera do curso
$curso->adicionaAlunoParaEspera(new Aluno('Patricia Freitas'));
$curso->adicionaAlunoParaEspera(new Aluno('Vinicius Dias'));
$curso->adicionaAlunoParaEspera(new Aluno('Ana Maria'));

echo '------------------------' . PHP_EOL;

// Itera sobre a lista de alunos na espera e imprime o nome de cada aluno
foreach ($curso->recuperaAlunosEsperando() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

// Matricula três alunos no curso (note que 'Patricia Freitas' é adicionada duas vezes)
$curso->matriculaAluno(new Aluno('Patricia Freitas'));
$curso->matriculaAluno(new Aluno('Rogério'));
$curso->matriculaAluno(new Aluno('Patricia Freitas'));

echo '------------------------' . PHP_EOL;

// Itera sobre a lista de alunos matriculados e imprime o nome de cada aluno
foreach ($curso->recuperaAlunosMatriculados() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

// Verifica se um aluno chamado 'Outro' está matriculado e armazena o resultado em $patriciaEstaMatriculada
$patriciaEstaMatriculada = $curso
    ->recuperaAlunosMatriculados()
    ->contains(new Aluno('Outro'));

// Imprime o resultado da verificação (booleano)
var_dump($patriciaEstaMatriculada);
