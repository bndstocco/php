<?php

use Alura\Threads\Activity\Activity;
use Alura\Threads\Student\InMemoryStudentRepository;
use Alura\Threads\Student\Student;
use parallel\Channel;
use parallel\Runtime;

require_once 'vendor/autoload.php'; // Carrega o autoload do Composer

$repository = new InMemoryStudentRepository(); // Instancia um repositório de estudantes em memória
$studentList = $repository->all(); // Obtém a lista de todos os estudantes

$totalPoints = 0; // Inicializa o total de pontos
$runtimes = []; // Array para armazenar as instâncias de Runtime
$futures = []; // Array para armazenar os resultados futuros
$channel = Channel::make('points'); // Cria um canal para comunicação entre processos

// Itera sobre a lista de estudantes
foreach ($studentList as $i => $student) {
    $activities = $repository->activitiesInADay($student); // Obtém as atividades do estudante no dia

    // Cria uma instância de Runtime para processamento paralelo
    $runtimes[$i] = new Runtime(__DIR__ . '/vendor/autoload.php');

    // Executa uma função em paralelo usando Runtime
    $futures[$i] = $runtimes[$i]->run(function (array $activities, Student $student, Channel $channel) {
        // Calcula os pontos totais das atividades do estudante
        $points = array_reduce(
            $activities,
            fn (int $total, Activity $activity) => $total + $activity->points(),
            0
        );

        // Envia os pontos calculados para o canal
        $channel->send($points);

        // Exibe uma mensagem com o nome completo do estudante e os pontos obtidos
        printf('%s made %d points today%s', $student->fullName(), $points, PHP_EOL);

        return $points; // Retorna os pontos calculados
    }, [$activities, $student, $channel]); // Passa os parâmetros necessários para a função em paralelo
}

$totalPointsWithChannel = 0; // Inicializa o total de pontos usando o canal

// Recebe os pontos calculados do canal para cada estudante
for ($i = 0; $i < count($studentList); $i++) {
    $totalPointsWithChannel += $channel->recv(); // Recebe e acumula os pontos do canal
}

$channel->close(); // Fecha o canal após o uso

$totalPoints = 0; // Inicializa o total de pontos globais

// Itera sobre os resultados futuros para obter os pontos totais de todos os estudantes
foreach ($futures as $future) {
    $totalPoints += $future->value(); // Obtém e acumula os valores dos futuros
}

// Exibe o total de pontos calculados usando o canal
printf('We had a total of %d points today%s', $totalPointsWithChannel, PHP_EOL);

// Exibe o total de pontos calculados usando os futuros
printf('We had a total of %d points today%s', $totalPoints, PHP_EOL);
