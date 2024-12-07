<?php

class Endereco
{
    private $cidade; // Declaração da propriedade $cidade
    private $bairro;// Declaração da propriedade $bairro
    private $rua;// Declaração da propriedade $rua
    private $numero;// Declaração da propriedade $numero

     public function __construct(string $cidade, string $bairro, string $rua, string $numero)// Método construtor da classe Endereco
    {
        // Atribui os valores passados como parâmetros às propriedades correspondentes da instância atual
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

     public function recuperaCidade(): string// Método para recuperar a cidade
    {
         return $this->cidade;// Retorna o valor da propriedade $cidade
    }

     public function recuperaBairro(): string// Método para recuperar o bairro
    {
         return $this->bairro;// Retorna o valor da propriedade $bairro
    }

     public function recuperaRua(): string// Método para recuperar a rua
    {
         return $this->rua;// Retorna o valor da propriedade $rua
    }

     public function recuperaNumero(): string// Método para recuperar o número
    {
         return $this->numero;// Retorna o valor da propriedade $numero
    }
}
