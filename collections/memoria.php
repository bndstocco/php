<?php

$array = new SplDoublyLinkedList();

// First, add initial elements to ensure the list has at least 3 elements
for ($i = 0; $i < 3; $i++) {
    $array->add($i, $i);
}

// Now, add the rest of the elements at index 3
for ($i = 3; $i < 32769; $i++) {
    $array->add(3, $i);
}

// Output memory usage in megabytes
var_dump(memory_get_usage() / 1024 / 1024);
