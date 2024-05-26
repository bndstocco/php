<?php

// Define um array associativo com as notas do primeiro bimestre
$primeiroBimestre = [
    'bnd' => 100,
    'gpt' => 50,
    'knp' => 30,
    'leo' => 20,
    'aniba' => 10,
];

// Define um array associativo com as notas do segundo bimestre
$segundoBimestre = [
    'bnd' => 15,
    'gpt' => 20,
    'knp' => 10,
];


// Encontra os alunos que estão no primeiro bimestre, mas não estão no segundo
$alunosFaltantes = array_diff_key($primeiroBimestre, $segundoBimestre);

// Obtém os nomes dos alunos que faltaram no segundo bimestre


// Obtém as notas dos alunos que faltaram no segundo bimestre

// Cria um novo array onde as chaves são as notas e os valores são os nomes dos alunos

// Inverte o array $alunosFaltantes, trocando chaves por valores e valores por chaves
