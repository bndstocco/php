<?php

$arquivoCursos = new SplFileObject('cursos.csv');

// Lê cada linha do arquivo CSV e exibe o conteúdo da primeira coluna
while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');
    echo utf8_encode($linha[0]) . PHP_EOL;
}

// Obtém a data de modificação do arquivo e formata para exibição
$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());
echo $date->format('d/m/Y');
