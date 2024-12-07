<?php

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2; //$altura ** 2 é usado para calcular a altura ao quadrado.

echo "Seu IMC é de $imc. Você está com o IMC " ;

if ($imc < 10) {
    echo "abaixo";
} elseif ($imc < 25){
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";