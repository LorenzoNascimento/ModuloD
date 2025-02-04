<?php

$numero1 = [];
$numero2 = [];
$multiplicado = 0;

for($i = 1; $i < 2; $i++){
    echo("\n Digite um numero \n");
    $numero1 = readline();

    echo("Digite um numero \n");
    $numero2 = readline();
}

foreach($numero1 as $a){
foreach($numero2 as $b){
    $multiplicado = $a * $b;

    echo($multiplicado);
}
}