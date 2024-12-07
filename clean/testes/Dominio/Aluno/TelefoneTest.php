<?php

namespace Alura\Arquitetura\Testes\Dominio\Aluno; // Define o namespace onde a classe TelefoneTest está localizada

use Alura\Arquitetura\Dominio\Aluno\Telefone; // Importa a classe Telefone do namespace Dominio\Aluno
use PHPUnit\Framework\TestCase; // Importa a classe TestCase do PHPUnit para criação de testes unitários

class TelefoneTest extends TestCase // Declaração da classe TelefoneTest que estende TestCase para testes unitários
{
    public function testTelefoneDevePoderSerRepresentadoComoString() // Teste unitário para verificar se o telefone pode ser representado como string
    {
        $telefone = new Telefone('24', '22222222'); // Cria um objeto Telefone com DDD '24' e número '22222222'
        $this->assertSame('(24) 22222222', (string) $telefone); // Verifica se a representação do telefone como string está correta
    }

    public function testTelefoneComDddInvalidoNaoDeveExistir() // Teste unitário para verificar se um telefone com DDD inválido lança uma exceção
    {
        $this->expectException(\InvalidArgumentException::class); // Espera-se que uma exceção do tipo \InvalidArgumentException seja lançada
        $this->expectDeprecationMessage('DDD inválido'); // Espera-se que a mensagem de exceção seja 'DDD inválido'
        new Telefone('ddd', '22222222'); // Tenta criar um objeto Telefone com DDD inválido
    }

    public function testTelefoneComNumeroInvalidoNaoDeveExistir() // Teste unitário para verificar se um telefone com número inválido lança uma exceção
    {
        $this->expectException(\InvalidArgumentException::class); // Espera-se que uma exceção do tipo \InvalidArgumentException seja lançada
        $this->expectDeprecationMessage('Número de telefone inválido'); // Espera-se que a mensagem de exceção seja 'Número de telefone inválido'
        new Telefone('24', 'número'); // Tenta criar um objeto Telefone com número inválido
    }
}
