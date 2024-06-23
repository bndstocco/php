<?php

// Definição da função exibeMensagem
// Esta função aceita uma string como parâmetro e a exibe seguida de uma nova linha
function exibeMensagem(string $mensagem)
{
    // Imprime a mensagem seguida de uma quebra de linha adequada ao sistema operacional
    echo $mensagem . PHP_EOL;
}

// Exemplo de chamadas da função
exibeMensagem("Olá, Mundo!");  // Exibe: Olá, Mundo!
exibeMensagem("Esta é outra mensagem.");  // Exibe: Esta é outra mensagem.
