<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18]; // Criação da lista de idades

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList; // Desestruturação da lista para atribuir valores a variáveis individuais

$idadeList[] = 20; // Adiciona mais um elemento à lista com o valor 20

foreach ($idadeList as $idade) { // Loop foreach para percorrer e imprimir todas as idades da lista
    echo $idade . PHP_EOL; // Imprime cada idade seguida de uma quebra de linha
}
