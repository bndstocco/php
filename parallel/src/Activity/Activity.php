<?php
// Declaração de que o arquivo contém código PHP

namespace Alura\Threads\Activity;
// Define o namespace onde a interface será localizada. 
// Namespaces são usados para organizar código e evitar conflitos de nome.

interface Activity
{
    // Declaração de uma interface chamada 'Activity'.
    // Interfaces definem métodos que as classes implementadoras devem ter,
    // mas não fornecem a implementação desses métodos.

    public function points(): int;
    // Declaração de um método chamado 'points' que deve retornar um inteiro (int).
    // Classes que implementarem essa interface precisarão definir como esse método funciona.
}
