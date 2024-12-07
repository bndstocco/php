<?php

// Inclui o arquivo que contém a definição da classe MeuFiltro
require 'MeuFiltro.php';

// Abre o arquivo 'lista-cursos.txt' para leitura ('r')
$arquivoCursos = fopen('lista-cursos.txt', 'r');

// Registra o filtro de stream 'alura.partes' utilizando a classe MeuFiltro
stream_filter_register('alura.partes', MeuFiltro::class);

// Adiciona o filtro 'alura.partes' ao stream do arquivo $arquivoCursos
stream_filter_append($arquivoCursos, 'alura.partes');

// Lê e exibe o conteúdo do arquivo usando fread() até o tamanho do arquivo 'lista-cursos.txt'
echo fread($arquivoCursos, filesize('lista-cursos.txt'));
