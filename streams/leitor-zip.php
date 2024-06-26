<?php

// Cria um contexto de stream para configurar o acesso ao arquivo ZIP com senha
$contexto = stream_context_create([
    'zip' => [
        'password' => '123456' // Define a senha do arquivo ZIP
    ]
]);

// Lê e exibe o conteúdo do arquivo 'lista-cursos.txt' dentro do arquivo ZIP 'arquivos.zip'
// O prefixo 'zip://' indica que estamos acessando um arquivo dentro de um arquivo ZIP
// '#lista-cursos.txt' especifica o caminho interno do arquivo dentro do ZIP
echo file_get_contents(
    'zip://arquivos.zip#lista-cursos.txt', // URL do arquivo ZIP e caminho interno do arquivo
    false, // Não usar cache (false)
    $contexto // Contexto de stream com a senha do arquivo ZIP
);
