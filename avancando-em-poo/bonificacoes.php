<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes; // Importa a classe ControladorDeBonificacoes do namespace Alura\Banco\Service
use Alura\Banco\Modelo\CPF; // Importa a classe CPF do namespace Alura\Banco\Modelo
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor}; // Importa as classes Diretor, EditorVideo, Gerente e Desenvolvedor do namespace Alura\Banco\Modelo\Funcionario

$umFuncionario = new Desenvolvedor( // Instancia um objeto Desenvolvedor
    'Vinicius Dias', // Define o nome do funcionário
    new CPF('123.456.789-10'), // Define o CPF do funcionário
    1000 // Define o salário do funcionário
);

$umFuncionario->sobeDeNivel(); // Promove o funcionário para o próximo nível

$umaFuncionaria = new Gerente( // Instancia um objeto Gerente
    'Patricia', // Define o nome da funcionária
    new CPF('987.654.321-10'), // Define o CPF da funcionária
    3000 // Define o salário da funcionária
);

$umDiretor = new Diretor( // Instancia um objeto Diretor
    'Ana Paula', // Define o nome do diretor
    new CPF('123.951.789-11'), // Define o CPF do diretor
    5000 // Define o salário do diretor
);

$umEditor = new EditorVideo( // Instancia um objeto EditorVideo
    'Paulo', // Define o nome do editor de vídeo
    new CPF('456.987.231-11'), // Define o CPF do editor de vídeo
    1500 // Define o salário do editor de vídeo
);

$controlador = new ControladorDeBonificacoes(); // Instancia um objeto ControladorDeBonificacoes
$controlador->adicionaBonificacaoDe($umFuncionario); // Adiciona a bonificação do funcionário ao controlador
$controlador->adicionaBonificacaoDe($umaFuncionaria); // Adiciona a bonificação da funcionária ao controlador
$controlador->adicionaBonificacaoDe($umDiretor); // Adiciona a bonificação do diretor ao controlador
$controlador->adicionaBonificacaoDe($umEditor); // Adiciona a bonificação do editor de vídeo ao controlador

echo $controlador->recuperaTotal(); // Exibe o total de bonificações concedidas pelo controlador
