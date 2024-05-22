<?php

// Define dois arrays contendo nomes de cursos
$cursos = [
    'Introdução ao PHP',
    'DDD com PHP',
    'Coleções em PHP'
];

$cursosOo = [
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
];

// Combina os dois arrays usando array_merge
$novoArray = array_merge($cursos, $cursosOo);

// Adiciona um novo elemento no início do array usando array_unshift
array_unshift($novoArray, 'Instalando PHP');

// Exibe o conteúdo do novo array
var_dump($novoArray);
