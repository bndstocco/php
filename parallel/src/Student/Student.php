<?php

namespace Alura\Threads\Student;

class Student
{
    private string $fullName; // Propriedade privada que armazena o nome completo do estudante
    private ProfilePicture $profilePicture; // Propriedade privada que armazena o objeto ProfilePicture do estudante

    public function __construct(string $fullName, ProfilePicture $profilePicture)
    {
        $this->fullName = $fullName; // Inicializa o nome completo do estudante
        $this->profilePicture = $profilePicture; // Inicializa o objeto ProfilePicture do estudante
    }

    public function fullName(): string
    {
        return $this->fullName; // Retorna o nome completo do estudante
    }

    public function profilePicturePath(): string
    {
        return $this->profilePicture->filePath(); // Retorna o caminho do arquivo da imagem do perfil do estudante
    }
}
