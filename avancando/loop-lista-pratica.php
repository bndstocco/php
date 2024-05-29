<?php

// Criação da lista de idades

$idadeList = [0, 2, 3, 4, 5, 6, 7, 8, 9];

// Loop for para percorrer a lista de idades
for ($i = 0; $i < count($idadeList); $i++) {
    // Imprime cada elemento da lista seguido de uma quebra de linha
    echo $idadeList[$i] . PHP_EOL;
}