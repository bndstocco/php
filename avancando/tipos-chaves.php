<?php 

/*No PHP, chaves de arrays que são inteiros, floats, booleanos ou strings representando 
inteiros são convertidas para inteiros, resultando na sobrescrição
de chaves duplicadas.
*/

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}