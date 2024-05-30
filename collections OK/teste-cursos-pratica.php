<?php

// Define um array associativo com três cursos de PHP
$cursos = [
    'Introdução ao php',
    'Aprenda OOP',
    'Aprenda condições'
];

// Define um segundo array associativo com dois cursos de PHP focados em Orientação a Objetos
$cursos2 = [
    'OOP focado',
    'Aprenda OOP'
];

// Junta os dois arrays ($cursos e $cursosOo) em um novo array, $novoArray
$novoArray = array_merge($cursos, $cursos2);

// Adiciona o elemento 'Instalando PHP' ao início do array $novoArray
array_unshift($novoArray,'Instalando PHP');

// Exibe o conteúdo do array $novoArray, incluindo a estrutura detalhada
var_dump($novoArray);