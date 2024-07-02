<?php

namespace Alura\Arquitetura\Dominio; // Define o namespace onde a classe Email está localizada

class Email // Declaração da classe Email
{
    private string $endereco; // Declaração da propriedade privada $endereco

    public function __construct(string $endereco) // Declaração do construtor da classe Email
    {
        if (filter_var($endereco, FILTER_VALIDATE_EMAIL) === false) { // Verifica se o $endereco é um e-mail válido
            throw new \InvalidArgumentException( // Lança uma exceção se o e-mail não for válido
                'Endereço de e-mail inválido' // Mensagem de erro da exceção
            );
        }

        $this->endereco = $endereco; // Atribui o valor de $endereco à propriedade $endereco da classe
    }

    public function __toString(): string // Método mágico para retornar o valor da propriedade $endereco como string
    {
        return $this->endereco; // Retorna o endereço de e-mail como string
    }
}
