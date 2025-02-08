<?php

$numeros = [10, 15, 21, 45, 78];
$divisor = 2;

//FORMA 1
// $numeros = array_filter($numeros, function ($dado) use ($divisor) {
//     return ($dado % $divisor) == 0;
//     print_r($numeros);
// });

//FORMA 2
$numeros = array_filter($numeros, fn($dado) => $dado % $divisor == 0);

print_r($numeros);

