<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Dominio\Aluno;

// Importação da classe Cpf do namespace Alura\Arquitetura\Dominio
use Alura\Arquitetura\Dominio\Cpf;

// Definição da classe AlunoNaoEncontrado que estende a classe \DomainException
class AlunoNaoEncontrado extends \DomainException
{
    // Construtor da classe que recebe um objeto Cpf
    public function __construct(Cpf $cpf)
    {
        // Chama o construtor da classe pai (\DomainException) com uma mensagem personalizada
        parent::__construct("Aluno com CPF $cpf não encontrado");
    }
}
