<?php

$numero = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numeroinvertido = [];

$ler = count($numero);
for ($i = $ler - 1; $i >= 0; $i--) {
    $numeroinvertido[] = $numero[$i];
}

// array invertido
print_r($numeroinvertido);