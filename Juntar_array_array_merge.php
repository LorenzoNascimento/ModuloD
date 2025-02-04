<?php

$npares = [1, 2, 3, 4, 5];
$nimpares = [6, 7, 8, 9, 10];
$numeros = [];

$numeros = array_merge($npares, $nimpares);

foreach($numeros as $n){
    print_r($n . ", ");
}