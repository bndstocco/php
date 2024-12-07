#!/usr/bin/env php
<?php

// Inclui o autoloader do Composer, que carrega automaticamente todas as dependências do projeto
require 'vendor/autoload.php';

// Importa as classes necessárias dos namespaces especificados
use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

// Cria uma instância do cliente HTTP Guzzle, configurando a URL base
$client = new Client(['base_uri' => 'https://www.alura.com.br/']);

// Cria uma instância do Crawler do Symfony
$crawler = new Crawler();

// Cria uma instância do Buscador passando o cliente HTTP e o crawler
$buscador = new Buscador($client, $crawler);

// Busca os cursos na URL especificada
$cursos = $buscador->buscar('/cursos-online-programacao/php');

// Itera sobre a lista de cursos e exibe cada um usando a função exibeMensagem
foreach ($cursos as $curso) {
    exibeMensagem($curso);
}
