<?php

// Importa a classe Vector da biblioteca Ds (Data Structures)
use Ds\Vector;

// Cria uma nova instância da classe Vector e atribui à variável $array
$array = new Vector();

// Aloca espaço suficiente no vetor para 32.769 elementos
$array->allocate(32769);

// Loop que itera de 0 a 32.768 (totalizando 32.769 iterações)
for ($i = 0; $i < 32769; $i++) {

// Adiciona o valor atual de $i ao final do vetor
$array->push($i);
}
// Exibe a quantidade de memória atualmente usada pelo script, convertida de bytes para megabytes
var_dump(memory_get_usage() / 1024 / 1024);