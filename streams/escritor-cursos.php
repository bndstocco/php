<?php

// Definição do nome do curso a ser adicionado
$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

// Adiciona o conteúdo $curso ao final do arquivo 'cursos-php.txt'
// FILE_APPEND assegura que o conteúdo seja adicionado ao final do arquivo sem sobrescrevê-lo
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);
