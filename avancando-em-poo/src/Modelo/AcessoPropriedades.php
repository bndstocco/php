<?php

namespace Alura\Banco\Modelo;

// Define a trait AcessoPropriedades
trait AcessoPropriedades
{
    // Método mágico __get para acessar propriedades protegidas ou privadas através de métodos getter
    public function __get(string $nomeAtributo)
    {
        // Constrói o nome do método getter correspondente ao atributo solicitado
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        
        // Chama o método getter correspondente e retorna seu resultado
        return $this->$metodo();
    }
}
