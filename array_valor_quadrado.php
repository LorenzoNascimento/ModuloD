<?php

//Função
function quadrado($n1)
{
    //soma o valor vezes ele mesmo
    return $n1 * $n1;
}

//declarar os valores que serao passados ao quadrado
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//os valores irao passar pela função
$b = array_map('quadrado', $a);

//e exibilos na tela o novo valor
print_r($b);
