<?php

use GuzzleHttp\Client;

$client = new Client();
$reposta = $cliente->request(method: 'get', url: 'https://cursos.alura.com.br/category/programacao/php');

$html = $resposta->getBody();