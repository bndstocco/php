<?php

// Declaração do namespace para organizar o código e evitar conflitos de nome
namespace Alura\Arquitetura\Dominio\Aluno;

// Importação das classes Cpf e Email do namespace Alura\Arquitetura\Dominio
use Alura\Arquitetura\Dominio\Cpf;
use Alura\Arquitetura\Dominio\Email;

// Definição da classe Aluno
class Aluno
{
    // Propriedades privadas para armazenar os dados do aluno
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;
    private string $senha;

    // Método estático para criar uma instância de Aluno usando CPF, nome e email
    public static function comCpfNomeEEmail(string $cpf, string $nome, string $email): self
    {
        return new Aluno(new Cpf($cpf), $nome, new Email($email));
    }

    // Construtor da classe que recebe Cpf, nome e Email e os atribui às propriedades correspondentes
    public function __construct(Cpf $cpf, string $nome, Email $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefones = []; // Inicializa o array de telefones vazio
    }

    // Método para adicionar um telefone ao array de telefones do aluno
    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
        return $this;
    }

    // Métodos getter para acessar as propriedades privadas
    public function cpf(): string
    {
        return $this->cpf;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function email(): string
    {
        return $this->email;
    }

    // Método para retornar o array de telefones do aluno
    /** @return Telefone[] */
    public function telefones(): array
    {
        return $this->telefones;
    }
}
