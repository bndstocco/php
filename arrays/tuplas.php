<?php

// Definição de um array associativo $dados com três chaves: 'nome', 'nota' e 'idade'
$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

// Utiliza a função extract para extrair os valores do array associativo $dados para variáveis individuais com os mesmos nomes das chaves
extract($dados);

// Imprime o valor da variável $nome, $nota e $idade
var_dump($nome, $nota, $idade);

// Cria um novo array associativo compactando as variáveis $nome, $nota e $idade em um único array
var_dump(compact('nome', 'nota', 'idade'));
