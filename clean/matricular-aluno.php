<?php

use Alura\Arquitetura\Dominio\Aluno\Aluno; // Importa a classe Aluno do namespace Dominio\Aluno
use Alura\Arquitetura\Infra\Aluno\RepositorioDeAlunoEmMemoria; // Importa a classe RepositorioDeAlunoEmMemoria do namespace Infra\Aluno

require 'vendor/autoload.php'; // Inclui o arquivo de autoload do Composer para carregar as dependências

// Obtém os argumentos da linha de comando
$cpf = $argv[1]; // Primeiro argumento: CPF do aluno
$nome = $argv[2]; // Segundo argumento: nome do aluno
$email = $argv[3]; // Terceiro argumento: email do aluno
$ddd = $argv[4]; // Quarto argumento: DDD do telefone do aluno
$numero = $argv[5]; // Quinto argumento: número do telefone do aluno

// Cria um objeto Aluno com CPF, nome e email, adiciona um telefone e armazena na variável $aluno
$aluno = Aluno::comCpfNomeEEmail($cpf, $nome, $email)->adicionarTelefone($ddd, $numero);

// Cria um novo repositório em memória para armazenar os alunos
$repositorio = new RepositorioDeAlunoEmMemoria();

// Adiciona o aluno criado ao repositório em memória
$repositorio->adicionar($aluno);
