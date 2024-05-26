<?php


// cria um array com o numero e sua expressao em portugues setada na posição do array
$array = [
    1 => 'zero',
    2 => 'um',
    3 => 'dois',
];

//itera cada item do array como numeral e pra cada item do numeral ele da um nome
// retorna a variavel e sua traducao com uma quebra de linha
foreach ($array as $numeral => $nomeNumero) {
    echo "O $numeral é igual a $nomeNumero" . PHP_EOL;
}

//retorna o total fazendo a contagem do array com quebra de linha
echo "Total: " . count($array) . PHP_EOL;

//verifica se o array é uma lista, se sim retorna true
var_dump(array_is_list($array));