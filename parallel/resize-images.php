<?php

use Alura\Threads\Student\InMemoryStudentRepository;
use parallel\Runtime;

require_once 'vendor/autoload.php';

// Instancia o repositório de estudantes em memória
$repository = new InMemoryStudentRepository();

// Obtém todos os estudantes do repositório
$studentList = $repository->all();

// Divide a lista de estudantes em pedaços (chunks)
$studentChunks = array_chunk($studentList, ceil(count($studentList) / 2));

$runtimes = [];

// Itera sobre cada chunk de estudantes
foreach ($studentChunks as $i => $studentChunk) {
    // Cria um novo runtime para cada chunk, passando o autoload.php para garantir que as classes estejam disponíveis no contexto paralelo
    $runtimes[$i] = new Runtime(__DIR__ . '/vendor/autoload.php');

    // Executa uma função anônima em paralelo, recebendo o chunk de estudantes como argumento
    $runtimes[$i]->run(function (array $students) {
        foreach ($students as $student) {
            echo 'Redimensionando foto de perfil de ' . $student->fullName() . PHP_EOL;

            $profilePicturePath = $student->profilePicturePath();
            [$width, $height] = getimagesize($profilePicturePath);

            $ratio = $height / $width;

            $newWidth = 200;
            $newHeight = 200 * $ratio;

            // Cria uma imagem a partir do arquivo JPEG original
            $sourceImage = imagecreatefromjpeg($profilePicturePath);

            // Cria uma nova imagem com as dimensões redimensionadas
            $destinationImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($destinationImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            // Salva a nova imagem redimensionada
            imagejpeg($destinationImage, __DIR__ . '/storage/resized/' . basename($profilePicturePath));

            echo 'Finalizado redimensionamento da foto de perfil de ' . $student->fullName() . PHP_EOL;
        }
    }, [$studentChunk]);
}

// Fecha cada runtime após o término das tarefas
foreach ($runtimes as $runtime) {
    $runtime->close();
}

echo 'Finalizando thread principal' . PHP_EOL;
