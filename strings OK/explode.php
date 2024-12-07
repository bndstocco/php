<?php

$array = '1 2 3 4';

var_dump(explode(' ', $array, 2));

//explode(' ', $array, 2) divide a string $array em duas partes com 
//base no primeiro espaço encontrado, 
//resultando em um array com duas strings.