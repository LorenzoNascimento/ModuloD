<?php

$ordenarPorTamanho = function($a, $b){
    return strlen($a) - strlen($b);
};

$palavras = ["banana", "maçã", "laranja", "uva"];

usort($palavras, ordenarPorTamanho());
print_r($palavras);