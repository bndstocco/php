<?php

use Alura\Banco\Modelo\CPF; // Importa a classe CPF do namespace Alura\Banco\Modelo
use Alura\Banco\Modelo\Funcionario\Diretor; // Importa a classe Diretor do namespace Alura\Banco\Modelo\Funcionario
use Alura\Banco\Service\Autenticador; // Importa a classe Autenticador do namespace Alura\Banco\Service

require_once 'autoload.php'; // Inclui o arquivo de autoload, que provavelmente carrega automaticamente as classes conforme necessário

$autenticador = new Autenticador();// Cria uma instância do Autenticador

$umDiretor = new \Alura\Banco\Modelo\Funcionario\Gerente ( // Cria uma instância de um Diretor (ou Gerente, dependendo do nome correto da classe)
    'Bnd', // Define o nome do diretor/gerente
    new CPF ('038.928.540-41'), // Define um CPF para o diretor/gerente
     10000// Define o salário do diretor/gerente
);

$autenticador->tentaLogin($umDiretor, '12345'); // Tenta realizar o login com o diretor/gerente usando a senha '4321'
