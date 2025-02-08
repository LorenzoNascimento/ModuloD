<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$soma;
for($i = 0; $i < 10; $i++){
if($numeros[$i] % 2 == 0){
    $soma += $numeros[$i];

}
}

print_r("\nO resultado é: " . $soma);