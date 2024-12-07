<?php

// Lê o conteúdo do arquivo 'lista-cursos.txt' e armazena cada linha como um elemento em um array
$cursos = file('lista-cursos.txt');

// Exibe o conteúdo do array $cursos utilizando var_dump(), que mostra informações detalhadas sobre a variável
var_dump($cursos);
