<?php
// Declaração de que o arquivo contém código PHP

namespace Alura\Threads\Activity;
// Define o namespace onde a classe será localizada.

class Course implements Activity
{
    // Declaração de uma classe chamada 'Course' que implementa a interface 'Activity'.

    /** @var Video[] */
    private array $videos;
    // Declaração de uma propriedade privada chamada '$videos' que é um array de objetos do tipo 'Video'.
    // O comentário acima da propriedade é uma anotação de tipo que informa que este array conterá objetos 'Video'.

    public function __construct(array $videos)
    {
        $this->videos = $videos;
        // Construtor da classe que recebe um array de vídeos como parâmetro e o atribui à propriedade '$videos'.
    }

    public function points(): int
    {
        // Implementação do método 'points' definido na interface 'Activity'.
        // Este método retorna um valor inteiro.

        return array_reduce($this->videos, fn (int $total, Video $video) => $video->points() + $total, 0);
        // Usa a função 'array_reduce' para somar os pontos de todos os vídeos no array '$videos'.
        // A função de callback (uma função anônima) adiciona os pontos de cada vídeo ao total acumulado.
        // O terceiro argumento '0' é o valor inicial do acumulador '$total'.
    }
}
