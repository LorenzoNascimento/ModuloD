<?php

//Função
function dobrar($numeros) {
    //Retornar o valor do $numero X 2
 return $numeros * 2;
}

//declarar os valores que serao dobrados
$a = [1, 2, 3, 4, 5];
//os valores irao passar um por um e chamar o método dobrar e irao multiplicalos por 2
$b = array_map('dobrar', $a);
//e exibilos na tela o novo valor
print_r($b);
