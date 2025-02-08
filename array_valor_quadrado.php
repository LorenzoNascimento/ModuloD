<?php

//Função
function quadrado($n1)
{
    //Retornar o valor do $numero X 2
    return $n1 * $n1;
}

//declarar os valores que serao dobrados
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//os valores irao passar um por um e chamar o método dobrar e irao multiplicalos por 2
$b = array_map('quadrado', $a);
//e exibilos na tela o novo valor
print_r($b);
