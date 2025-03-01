<?php
$palavras = ["banana", "maçã", "laranja", "uva"];

$ordenarPorTamanho = function ($a, $b) {
    return strlen($a) - strlen($b);
};


usort($palavras, $ordenarPorTamanho);
print_r($palavras);
