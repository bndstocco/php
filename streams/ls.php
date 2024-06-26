<?php

// Obtém o caminho do diretório atual
$diretorioAtual = dir('.');

// Exibe o caminho do diretório atual
echo $diretorioAtual->path . PHP_EOL;

// Itera sobre os arquivos e diretórios no diretório atual
while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . PHP_EOL; // Exibe o nome do arquivo ou diretório
}

// Fecha o manipulador do diretório após a leitura
$diretorioAtual->close();
