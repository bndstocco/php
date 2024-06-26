<?php

// Definição da classe MinhaExcecao, que estende a classe DomainException
class MinhaExcecao extends DomainException
{
    // Método personalizado da classe MinhaExcecao
    public function exibeVinicius()
    {
        echo "Vinicius";
    }
}

try {
    // Lança uma nova instância da exceção MinhaExcecao
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    // Captura a exceção MinhaExcecao e chama o método exibeVinicius()
    $e->exibeVinicius();
}
