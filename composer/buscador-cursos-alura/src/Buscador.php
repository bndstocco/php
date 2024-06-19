<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\ClientInterface; // Importa a interface ClientInterface da biblioteca GuzzleHttp
use Symfony\Component\DomCrawler\Crawler; // Importa a classe Crawler da biblioteca Symfony DomCrawler

class Buscador
{
    /**
     * @var ClientInterface
     */
    private $httpClient; // Declara uma propriedade privada para o cliente HTTP
    
    /**
     * @var Crawler
     */
    private $crawler; // Declara uma propriedade privada para o objeto Crawler

    /**
     * Construtor da classe que inicializa as propriedades httpClient e crawler
     *
     * @param ClientInterface $httpClient
     * @param Crawler $crawler
     */
    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    /**
     * Método para buscar cursos em uma URL fornecida
     *
     * @param string $url URL para buscar os cursos
     * @return array Lista de cursos encontrados
     */
    public function buscar(string $url): array
    {
        // Faz uma requisição HTTP GET para a URL fornecida
        $resposta = $this->httpClient->request('GET', $url);

        // Obtém o corpo da resposta HTTP
        $html = $resposta->getBody();
        
        // Adiciona o conteúdo HTML ao objeto Crawler para análise
        $this->crawler->addHtmlContent($html);

        // Filtra os elementos que contêm os nomes dos cursos
        $elementosCursos = $this->crawler->filter('span.card-curso__nome');
        $cursos = []; // Inicializa um array para armazenar os nomes dos cursos

        // Itera sobre os elementos encontrados e adiciona o texto de cada um ao array de cursos
        foreach ($elementosCursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        // Retorna o array de cursos
        return $cursos;
    }
}
