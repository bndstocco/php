<?php

// Inclui o arquivo que contém a definição da classe Curso
require_once 'Curso.php';

// Cria uma instância da classe Curso, passando o nome do curso como argumento
$curso = new Curso('Collections com PHP');

// Adiciona alterações ao curso usando o método adicionaAlteracao da instância $curso
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

// Itera sobre as alterações do curso usando o método recuperaAlteracoes e exibe cada alteração
foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao . PHP_EOL;
}

// Adiciona alunos em lista de espera ao curso usando o método adicionaAlunoParaEspera da instância $curso
$curso->adicionaAlunoParaEspera('Patricia Freitas');
$curso->adicionaAlunoParaEspera('Vinicius Dias');
$curso->adicionaAlunoParaEspera('Ana Maria');

// Itera sobre os alunos em lista de espera do curso usando o método recuperaAlunosEsperando e exibe cada aluno
foreach ($curso->recuperaAlunosEsperando() as $aluno) {
    echo $aluno . PHP_EOL;
}
?>
