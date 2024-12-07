<?php

namespace Alura\Threads\Student;

use Alura\Threads\Activity\Activity; // Importa a interface Activity

interface StudentRepository
{
    /** 
     * Retorna todos os estudantes.
     * 
     * @return Student[] Um array contendo objetos Student
     */
    public function all(): array;

    /** 
     * Retorna as atividades de um estudante em um dia específico.
     * 
     * @param Student $student O estudante para o qual as atividades são retornadas
     * @return Activity[] Um array contendo objetos Activity (Course, Video, Exercise)
     */
    public function activitiesInADay(Student $student): array;
}
