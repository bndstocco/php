<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Dominio\Indicacao;

// Importação da classe Aluno do namespace Alura\Arquitetura\Dominio\Aluno
use Alura\Arquitetura\Dominio\Aluno\Aluno;

// Definição da classe Indicacao
class Indicacao
{
    // Propriedades privadas para armazenar o aluno que indica, o aluno indicado e a data da indicação
    private Aluno $indicante;
    private Aluno $indicado;
    private \DateTimeImmutable $data;

    // Construtor da classe que recebe o aluno indicante e o aluno indicado
    public function __construct(Aluno $indicante, Aluno $indicado)
    {
        $this->indicante = $indicante;
        $this->indicado = $indicado;
        
        // Inicializa a data da indicação com a data e hora atuais
        $this->data = new \DateTimeImmutable();
    }
}
