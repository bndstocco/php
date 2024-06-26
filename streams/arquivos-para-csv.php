<?php

// Lê o conteúdo do arquivo 'lista-cursos.txt' para um array, cada linha se torna um elemento do array
$meusCursos = file('lista-cursos.txt');

// Lê o conteúdo do arquivo 'cursos-php.txt' para um array, cada linha se torna um elemento do array
$outrosCursos = file('cursos-php.txt');

// Abre o arquivo 'cursos.csv' para escrita ('w'), cria o arquivo se não existir ou sobrescreve se existir
$arquivoCsv = fopen('cursos.csv', 'w');

// Itera sobre os cursos de 'lista-cursos.txt'
foreach ($meusCursos as $curso) {
    // Remove espaços em branco no início e no final da string, converte para UTF-8 e prepara a linha do CSV com 'Sim'
    $linha = [trim(utf8_decode($curso)), 'Sim'];

    // Escreve a linha no arquivo CSV usando o delimitador ';' (ponto e vírgula)
    fputcsv($arquivoCsv, $linha, ';');
}

// Itera sobre os cursos de 'cursos-php.txt'
foreach ($outrosCursos as $curso) {
    // Remove espaços em branco no início e no final da string, converte para UTF-8 e prepara a linha do CSV com 'Não'
    $linha = [trim(utf8_decode($curso)), 'Não'];

    // Escreve a linha no arquivo CSV usando o delimitador ';' (ponto e vírgula)
    fputcsv($arquivoCsv, $linha, ';');
}

// Fecha o arquivo CSV após terminar de escrever todas as linhas
fclose($arquivoCsv);
