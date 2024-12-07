<?php

// Define um array associativo com três cursos de PHP
$cursos = [
    'Introdução ao PHP',
    'DDD com PHP',
    'Coleções em PHP'
];

// Define um segundo array associativo com dois cursos de PHP focados em Orientação a Objetos
$cursosOo = [
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
];

// Junta os dois arrays ($cursos e $cursosOo) em um novo array, $novoArray
$novoArray = array_merge($cursos, $cursosOo);

// Adiciona o elemento 'Instalando PHP' ao início do array $novoArray
array_unshift($novoArray, 'Instalando PHP');

// Exibe o conteúdo do array $novoArray, incluindo a estrutura detalhada
var_dump($novoArray);
