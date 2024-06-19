<?php

use Alura\Fp\Maybe;

// Retorna um objeto Maybe contendo um array de países e suas medalhas
return Maybe::of([
    [
        "pais" => "Brasil",
        "medalhas" => [
            "ouro" => 3,
            "prata" => 5,
            "bronze" => 3
        ]
    ],
    [
        "pais" => "Arábia Saudita",
        "medalhas" => [
            "ouro" => 4,
            "prata" => 3,
            "bronze" => 4
        ]
    ],
    [
        "pais" => "Estados unidos",
        "medalhas" => [
            "ouro" => 4,
            "prata" => 3,
            "bronze" => 5
        ]
    ],
    [
        "pais" => "Costa rica",
        "medalhas" => [
            "ouro" => 5,
            "prata" => 4,
            "bronze" => 4
        ]
    ],
]);
