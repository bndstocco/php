<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Aplicacao\Indicacao;

// Importação da classe Aluno do namespace Alura\Arquitetura\Dominio\Aluno
use Alura\Arquitetura\Dominio\Aluno\Aluno;

// Definição da interface EnviaEmailIndicacao
interface EnviaEmailIndicacao
{
    // Método que deve ser implementado pelas classes que utilizarem esta interface
    // Recebe um objeto Aluno como parâmetro e não retorna nada (void)
    public function enviaPara(Aluno $alunoIndicado): void;
}
