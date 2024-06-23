<?php

namespace Alura\BuscadorDeCursos\Tests;

use Alura\BuscadorDeCursos\Buscador; // Importa a classe Buscador do namespace Alura\BuscadorDeCursos
use GuzzleHttp\ClientInterface; // Importa a interface ClientInterface da biblioteca GuzzleHttp
use PHPUnit\Framework\TestCase; // Importa a classe base de testes do PHPUnit
use Psr\Http\Message\ResponseInterface; // Importa a interface ResponseInterface do PSR
use Psr\Http\Message\StreamInterface; // Importa a interface StreamInterface do PSR
use Symfony\Component\DomCrawler\Crawler; // Importa a classe Crawler da biblioteca Symfony DomCrawler

class TestBuscadorDeCursos extends TestCase
{
    private $httpClientMock; // Declara uma propriedade privada para o mock do cliente HTTP
    private $url = 'url-teste'; // Define uma URL de teste

    // Configuração inicial para os testes
    protected function setUp(): void
    {
        // HTML de exemplo que será retornado pelo mock
        $html = <<<FIM
        <html>
            <body>
                <span class="card-curso__nome">Curso Teste 1</span>
                <span class="card-curso__nome">Curso Teste 2</span>
                <span class="card-curso__nome">Curso Teste 3</span>
            </body>
        </html>
        FIM;

        // Cria um mock para a interface StreamInterface
        $stream = $this->createMock(StreamInterface::class);
        // Configura o mock para retornar o HTML de exemplo quando __toString() for chamado
        $stream
            ->expects($this->once())
            ->method('__toString')
            ->willReturn($html);

        // Cria um mock para a interface ResponseInterface
        $response = $this->createMock(ResponseInterface::class);
        // Configura o mock para retornar o stream quando getBody() for chamado
        $response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($stream);

        // Cria um mock para a interface ClientInterface
        $httpClient = $this->createMock(ClientInterface::class);
        // Configura o mock para retornar a resposta quando request() for chamado com o método GET e a URL de teste
        $httpClient
            ->expects($this->once())
            ->method('request')
            ->with('GET', $this->url)
            ->willReturn($response);

        // Atribui o mock do cliente HTTP à propriedade httpClientMock
        $this->httpClientMock = $httpClient;
    }

    // Teste para verificar se o buscador retorna os cursos corretamente
    public function testBuscadorDeveRetornarCursos()
    {
        // Cria uma instância do Crawler
        $crawler = new Crawler();
        // Cria uma instância do Buscador usando o mock do cliente HTTP e o crawler
        $buscador = new Buscador($this->httpClientMock, $crawler);
        // Chama o método buscar() com a URL de teste e armazena o resultado
        $cursos = $buscador->buscar($this->url);

        // Verifica se o número de cursos retornados é 3
        $this->assertCount(3, $cursos);
        // Verifica se os nomes dos cursos retornados estão corretos
        $this->assertEquals('Curso Teste 1', $cursos[0]);
        $this->assertEquals('Curso Teste 2', $cursos[1]);
        $this->assertEquals('Curso Teste 3', $cursos[2]);
    }
}
