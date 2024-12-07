<?php

// Abre o arquivo 'cursos-php.txt' dentro do arquivo ZIP 'arquivos.zip' para leitura ('r')
$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');

// Copia o conteúdo do arquivo de entrada ($cursos) para a saída padrão (STDOUT)
stream_copy_to_stream($cursos, STDOUT);
