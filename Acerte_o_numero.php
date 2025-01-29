<?php

$tentativa = 5;

$numero = rand(1, 100) + 1;

do {

    echo ("\nTente acertar um numero de 1 a 100 com apenas 5 tentativas!\n");
    echo ("Digite um numero\n");
    $player = readline();
    if ($player == $numero) {
        echo ("Parabens você acertou o numero!!!");
    } else {
        $tentativa--;
        echo ("Você possui " . $tentativa . " tentativas, tente novamente!");
    }
} while ($player != $numero);
