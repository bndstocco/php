<?php

// Obtém o nome do novo curso a ser adicionado, lendo diretamente da entrada padrão (STDIN)
$novoCurso = trim(fgets(STDIN));

// Adiciona o novo curso ao final do arquivo 'cursos-php.txt', usando FILE_APPEND para acrescentar no final do arquivo
file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);
