<?php
$numero = (int) 0;

echo ("\n Digite um numero para saber se é par ou impar \n");
$numero = readline();

if ($numero % 2 == 0) {
    echo ("O numero é par!");
} else {
    echo ("O numero é impar!");
}
