<?php

class CPF
{
    private $numero; // Declaração da propriedade $numero

    public function __construct(string $numero) // Método construtor da classe CPF
    {
        // Filtra e valida o número de CPF fornecido
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/' // Expressão regular para validar o formato do CPF
            ]
        ]);

        // Se o número de CPF não for válido, exibe uma mensagem de erro e encerra o script
        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }

        // Atribui o número de CPF validado à propriedade $numero da instância atual
        $this->numero = $numero;
    }

    public function recuperaNumero(): string // Método para recuperar o número de CPF
    {
        return $this->numero; // Retorna o número de CPF
    }
}
