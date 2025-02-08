<?php

function soma($n1){
    return $n1 + $n1;
};

$numeros = [10, 6];

$total = array_map('soma', $numeros);
print_r($total);