<?php
// Define uma interface Hashable com os métodos equals e hash
Interface Hashable {
    public function equals($obj): bool; // Método para comparar igualdade
    public function hash(); // Método para obter o hash
}

// Define a classe Aluno que implementa a interface Hashable
class Aluno implements Hashable {
// Construtor da classe Aluno, que recebe e define o nome do aluno como uma propriedade pública

public function __construct(public string $nome)
{
    
}

// Método equals para comparar se dois objetos Aluno são iguais
public function equals($obj): bool
{
// Verifica se o objeto fornecido não é uma instância de Aluno
if (!$obj instanceof Aluno){
    return false;
}
// Compara o nome do objeto fornecido com o nome do objeto atual
return $obj->nome === $this->nome;
}

}











// Método hash que retorna o nome do aluno como valor hash
