<?php
 spl_autoload_register(function (string $nomeCompletoDaClasse){ // Define uma função anônima para ser registrada como um autoloader
$caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);     // Substitui 'Alura\\Banco' por 'src' no nome completo da classe
$caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);     // Substitui as barras invertidas por separadores de diretório do sistema operacional atual
$caminhoArquivo .= '.php';     // Adiciona a extensão '.php' ao caminho do arquivo

  if (file_exists($caminhoArquivo))   { // Verifica se o arquivo da classe existe
        require_once $caminhoArquivo; // Inclui o arquivo da classe
    }
});
