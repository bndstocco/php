<?php

namespace Alura\Banco\Modelo\Funcionario;

// Define a classe EditorVideo que herda de Funcionario
class EditorVideo extends Funcionario
{
    // Método para calcular a bonificação do editor de vídeo
    public function calculaBonificacao(): float
    {
        // Retorna uma bonificação fixa de 600
        return 600;
    }
}
