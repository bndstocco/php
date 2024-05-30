<?php

$pontos = 1;

if ($pontos >= 50){
    echo "Você ganhou 20 pontos extras";
} elseif ($pontos >= 20){
    echo "Você ganhou 10 pontos extras";
} elseif ($pontos > 0){
    echo "Não ganhou pontos extras";
} else {
    echo "Você perdeu 15 pontos";
}

// ternario
$idade = 15;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;
