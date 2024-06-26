<?php

// Cria um contexto de stream para configurar a requisição HTTP
$contexto = stream_context_create([
    'http' => [
        'method' => 'POST', // Define o método da requisição como POST
        'header' => "X-From: PHP\r\nContent-Type: text/plain", // Define os cabeçalhos HTTP
        'content' => 'Teste do corpo', // Define o corpo da requisição
    ]
]);

// Faz a requisição POST para http://httpbin.org/post utilizando file_get_contents
// O parâmetro false indica que não será usado cache
// O terceiro parâmetro é o contexto que contém as configurações da requisição
echo file_get_contents('http://httpbin.org/post', false, $contexto);
