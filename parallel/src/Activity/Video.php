<?php

namespace Alura\Threads\Activity;

use function Alura\Threads\isPrime; // Importa a função isPrime do namespace Alura\Threads

class Video implements Activity // Declaração da classe Video que implementa a interface Activity
{
    private int $durationInSeconds; // Declaração da propriedade privada $durationInSeconds

    public function __construct(\DateInterval $duration)
    {
        // Construtor que recebe um objeto DateInterval $duration como parâmetro

        // Verifica se o vídeo tem mais de uma hora (anos, meses, dias ou horas são maiores que zero)
        if ($duration->y > 0 || $duration->m > 0 || $duration->d > 0 || $duration->h > 0) {
            throw new \InvalidArgumentException('Duration must be less than 1 hour'); // Lança uma exceção se a duração for maior que uma hora
        }

        // Calcula a duração em segundos (minutos convertidos em segundos + segundos)
        $this->durationInSeconds = $duration->m * 60 + $duration->s;
    }

    public function points(): int
    {
        // Método que calcula os pontos do vídeo

        $durationInSeconds = $this->durationInSeconds; // Atribui a duração em segundos à variável $durationInSeconds
        $points = $durationInSeconds * 1.6666666666666667; // Calcula os pontos baseados na duração em segundos

        // Verifica se a duração em segundos é um número primo usando a função isPrime
        if (isPrime($durationInSeconds)) {
            $points += $points / $durationInSeconds / 2; // Incrementa os pontos se a duração for um número primo
        }

        return ceil($points); // Retorna os pontos arredondados para cima
    }
}
