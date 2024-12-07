<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno;

// Importação das classes Aluno e RepositorioDeAluno do namespace Alura\Arquitetura\Dominio\Aluno
use Alura\Arquitetura\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Dominio\Aluno\RepositorioDeAluno;

// Definição da classe MatricularAluno
class MatricularAluno
{
    // Propriedade privada para armazenar o repositório de aluno
    private RepositorioDeAluno $repositorioDeAluno;

    // Construtor da classe que recebe uma instância de RepositorioDeAluno e a atribui à propriedade privada
    public function __construct(RepositorioDeAluno $repositorioDeAluno)
    {
        $this->repositorioDeAluno = $repositorioDeAluno;
    }

    // Método executa que recebe um DTO (Data Transfer Object) contendo os dados do aluno a ser matriculado
    public function executa(MatricularAlunoDto $dados): void
    {
        // Criação de uma instância de Aluno usando um método estático que recebe CPF, nome e email do aluno
        $aluno = Aluno::comCpfNomeEEmail($dados->cpfAluno, $dados->nomeAluno, $dados->emailAluno);
        
        // Adição do aluno ao repositório de aluno
        $this->repositorioDeAluno->adicionar($aluno);
    }
}
