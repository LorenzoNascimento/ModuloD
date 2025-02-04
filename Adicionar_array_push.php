<?php

$numeros = [1, 2, 3, 4, 5];

array_push($numeros, 6, 7, 8, 9, 10);

foreach($numeros as $n){
    print_r($n . ", ");
}
