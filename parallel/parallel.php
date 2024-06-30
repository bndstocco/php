<?php

use parallel\Runtime;

// Inicia um novo runtime para executar tarefas paralelas
$runtime = new Runtime();

// Executa uma função anônima em paralelo
$runtime->run(function () {
    var_dump('Tarefa 2:', debug_backtrace()); // Debug da tarefa 2 usando debug_backtrace()
    echo 'Executando tarefa demorada 2' . PHP_EOL; // Mensagem indicando início da tarefa 2
    sleep(8); // Simula uma operação demorada
    echo 'Finalizando tarefa demorada 2' . PHP_EOL; // Mensagem indicando fim da tarefa 2
});

// Inicia outro runtime para uma segunda tarefa paralela
$runtime2 = new Runtime();

// Executa outra função anônima em paralelo
$runtime2->run(function () {
    echo 'Tarefa 3'; // Mensagem simples indicando a tarefa 3
    sleep(5); // Simula uma operação demorada
});

var_dump('Tarefa 1:', debug_backtrace()); // Debug da tarefa 1 usando debug_backtrace()
echo 'Executando tarefa demorada 1' . PHP_EOL; // Mensagem indicando início da tarefa 1
sleep(10); // Simula uma operação demorada
echo 'Finalizando tarefa demorada 1' . PHP_EOL; // Mensagem indicando fim da tarefa 1
