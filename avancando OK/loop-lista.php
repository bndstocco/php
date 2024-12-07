<?php

$idadeList = [23, 19, 25, 30, 41, 18, 21, 35]; // Criação da lista de idades

for ($i = 0; $i < count($idadeList); $i++) { // Loop for para percorrer a lista de idades
    echo $idadeList[$i] . PHP_EOL; // Imprime cada elemento da lista seguido de uma quebra de linha
}