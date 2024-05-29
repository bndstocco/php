<?php

// Criação da lista de idades
$idadeList = [32, 31, 30, 29, 28, 27, 26, 25, 24];
// Desestruturação da lista para atribuir valores a variáveis individuais
list ($idadeVinicius, $idadeMaria, $idadeBnd) = $idadeList;
// Adiciona mais um elemento à lista com o valor 20
$idadeList[] = 20;
// Loop foreach para percorrer e imprimir todas as idades da lista
foreach ($idadeList as $idade) {
// Imprime cada idade seguida de uma quebra de linha
echo $idade . PHP_EOL;
}
