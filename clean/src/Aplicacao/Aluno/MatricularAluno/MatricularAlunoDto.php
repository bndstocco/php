<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno;

// Definição da classe MatricularAlunoDto
class MatricularAlunoDto
{
    // Declaração das propriedades públicas para armazenar os dados do aluno
    public string $cpfAluno;
    public string $nomeAluno;
    public string $emailAluno;

    // Construtor da classe que recebe CPF, nome e email do aluno e os atribui às propriedades correspondentes
    public function __construct(string $cpfAluno, string $nomeAluno, string $emailAluno)
    {
        $this->cpfAluno = $cpfAluno;
        $this->nomeAluno = $nomeAluno;
        $this->emailAluno = $emailAluno;
    }
}
