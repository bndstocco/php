<?php

namespace Alura\Arquitetura\Testes\Dominio; // Define o namespace onde a classe EmailTest está localizada

use Alura\Arquitetura\Dominio\Email; // Importa a classe Email do namespace Dominio
use PHPUnit\Framework\TestCase; // Importa a classe TestCase do PHPUnit para criação de testes unitários

class EmailTest extends TestCase // Declaração da classe EmailTest que estende TestCase para testes unitários
{
    public function testEmailNoFormatoInvalidoNaoDevePoderExistir() // Teste unitário para verificar se um email com formato inválido lança uma exceção
    {
        $this->expectException(\InvalidArgumentException::class); // Espera-se que uma exceção do tipo \InvalidArgumentException seja lançada
        new Email('email inválido'); // Tenta criar um objeto Email com um endereço de email inválido
    }

    public function testEmailDevePoderSerRepresentadoComoString() // Teste unitário para verificar se um Email pode ser representado como string
    {
        $email = new Email('endereco@example.com'); // Cria um objeto Email com um endereço de email válido
        $this->assertSame('endereco@example.com', (string) $email); // Verifica se a representação do Email como string está correta
    }
}
