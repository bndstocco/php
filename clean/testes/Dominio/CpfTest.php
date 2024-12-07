<?php

namespace Alura\Arquitetura\Testes\Dominio; // Define o namespace onde a classe CpfTest está localizada

use Alura\Arquitetura\Dominio\Cpf; // Importa a classe Cpf do namespace Dominio
use PHPUnit\Framework\TestCase; // Importa a classe TestCase do PHPUnit para criação de testes unitários

class CpfTest extends TestCase // Declaração da classe CpfTest que estende TestCase para testes unitários
{
    public function testCpfComNumeroNoFormatoInvalidoNaoDevePoderExistir() // Teste unitário para verificar se um CPF com número em formato inválido lança uma exceção
    {
        $this->expectException(\InvalidArgumentException::class); // Espera-se que uma exceção do tipo \InvalidArgumentException seja lançada
        new Cpf('12345678910'); // Tenta criar um objeto Cpf com número de CPF inválido
    }

    public function testCpfDevePoderSerRepresentadoComoString() // Teste unitário para verificar se um CPF pode ser representado como string
    {
        $cpf = new Cpf('123.456.789-10'); // Cria um objeto Cpf com número de CPF válido
        $this->assertSame('123.456.789-10', (string) $cpf); // Verifica se a representação do CPF como string está correta
    }
}
