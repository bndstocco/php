<?php

// Cria uma lista duplamente encadeada usando a classe SplDoublyLinkedList
$array = new SplDoublyLinkedList();

// Primeiro, adiciona elementos iniciais para garantir que a lista tenha pelo menos 3 elementos
for ($i = 0; $i < 3; $i++) {
    $array->add($i, $i);
}

// Agora, adiciona o restante dos elementos no índice 3
for ($i = 3; $i < 32769; $i++) {
    $array->add(3, $i);
}

// Saída do uso de memória em megabytes
var_dump(memory_get_usage() / 1024 / 1024);
