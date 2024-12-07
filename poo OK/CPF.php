<?php

class CPF
{
    // Propriedade privada para armazenar o número do CPF
    private $numero;

    // Método construtor da classe CPF que recebe o número do CPF como parâmetro
    public function __construct(string $numero)
    {
        // Filtra e valida o número do CPF usando uma expressão regular
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/' // Expressão regular para o formato do CPF
            ]
        ]);

        // Verifica se o número do CPF é inválido
        if ($numero === false) {
            echo "Cpf inválido"; // Se for inválido, exibe uma mensagem de erro
            exit(); // Termina a execução do script
        }

        // Atribui o número do CPF validado à propriedade $numero
        $this->numero = $numero;
    }

    // Método para recuperar o número do CPF
    public function recuperaNumero(): string
    {
        return $this->numero; // Retorna o número do CPF
    }
}
