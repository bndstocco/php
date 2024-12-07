<?php

namespace Alura\Threads\Student;

use Alura\Threads\Activity\Activity;
use Alura\Threads\Activity\Course;
use Alura\Threads\Activity\Exercise;
use Alura\Threads\Activity\Video;

class InMemoryStudentRepository implements StudentRepository
{
    /**
     * Retorna todos os estudantes fictícios.
     *
     * @return Student[] Um array de objetos Student
     */
    public function all(): array
    {
        // Retorna um array de 50 estudantes fictícios
        return array_map(
            fn ($i) => new Student("Student Number $i", new ProfilePicture(__DIR__ . "/../../storage/$i.jpg")),
            range(1, 50) // Cria um array de números de 1 a 50
        );
    }

    /**
     * Retorna atividades (cursos, vídeos e exercícios) que um estudante realizou em um dia fictício.
     *
     * @param Student $student O objeto Student para o qual as atividades estão sendo retornadas
     * @return Activity[] Um array de objetos Activity (Course, Video, Exercise)
     */
    public function activitiesInADay(Student $student): array
    {
        // Número aleatório de exercícios e vídeos para o dia fictício
        $exercisesNumber = rand(1, 100);
        $videosNumber = rand(1, 10);

        // Cria uma lista de exercícios com base no número aleatório
        $exerciseList = array_map(fn () => new Exercise(), range(1, $exercisesNumber));
        
        // Cria uma lista de vídeos com base no número aleatório e duração aleatória
        $videoList = array_map(fn () => new Video(new \DateInterval('PT' . rand(1, 20) . 'M' . rand(0, 59) . 'S')), range(1, $videosNumber));

        // Lista de vídeos para um curso fictício com duração e quantidade fixas
        $videoListForCourse = array_map(fn () => new Video(new \DateInterval('PT' . rand(1, 20) . 'M' . rand(0, 59) . 'S')), range(1, 30));
        
        // Cria um objeto Course com base na lista de vídeos fictícia
        $course = new Course($videoListForCourse);

        // Retorna um array combinado com o curso e as listas de vídeos e exercícios aleatórios
        return array_merge([$course], $videoList, $exerciseList);
    }
}
