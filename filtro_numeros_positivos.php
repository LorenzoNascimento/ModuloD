<?php
$numeros = [-1, 2, 3, -4, 5, 6, 7, -8, 9, 10];

$numeros = array_filter($numeros, fn($positivos) => $positivos >= 0);
print_r($numeros);