<?php

return [
    // Define a versão alvo do PHP para a análise de código
    "target_php_version" => '7.3',
    
    // Lista de diretórios que devem ser analisados
    'directory_list' => [
        'src', // Diretório com o código-fonte principal
        'vendor/symfony/dom-crawler', // Biblioteca Symfony DomCrawler
        'vendor/guzzlehttp/guzzle', // Biblioteca Guzzle para requisições HTTP
        'vendor/psr/http-message' // Interfaces PSR para mensagens HTTP
    ],
    
    // Lista de diretórios que devem ser excluídos da análise
    "exclude_analysis_directory_list" => [
        'vendor/' // Exclui todo o diretório vendor da análise
    ],
    
    // Plugins que serão utilizados durante a análise
    'plugins' => [
        'AlwaysReturnPlugin', // Verifica se todas as funções sempre retornam um valor
        'UnreachableCodePlugin', // Detecta código que nunca será executado
        'DollarDollarPlugin', // Detecta uso da variável $$ (variáveis variáveis)
        'DuplicateArrayKeyPlugin', // Detecta chaves duplicadas em arrays
        'PregRegexCheckerPlugin', // Verifica a validade das expressões regulares em funções preg_*
        'PrintfCheckerPlugin', // Verifica a correção das chamadas a funções printf/ sprintf
    ],
];
