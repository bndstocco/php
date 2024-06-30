<?php
// Declaração de que o arquivo contém código PHP

namespace Alura\Threads\Activity;
// Define o namespace onde a classe será localizada.

class Exercise implements Activity
{
    // Declaração de uma classe chamada 'Exercise' que implementa a interface 'Activity'.

    public function points(): int
    {
        // Implementação do método 'points' definido na interface 'Activity'.
        // Este método retorna um valor inteiro.

        return ceil(rand(1, 100) * 0.8);
        // Gera um número aleatório entre 1 e 100 usando a função 'rand'.
        // Multiplica o número gerado por 0.8 para reduzir o valor.
        // Usa a função 'ceil' para arredondar o valor resultante para cima até o próximo número inteiro.
        // Retorna o valor arredondado.
    }
}
