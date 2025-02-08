<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0;

for($i = 0; $i < 10; $i++){
    if($numeros[$i] % 2 != 0){
        echo ("O numeros " . $numeros[$i] . " é impar!\n");
        $count++;
    }
}
echo( "\n" . $count . " Numeros são impares");