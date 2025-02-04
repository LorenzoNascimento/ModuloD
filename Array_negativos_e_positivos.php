<?php

$numero = (int)[];
$negativos = 0;
$positivos = 0;
$pares = 0;
$impar = 0;

//Verificar se o numero é impar, par, positivo ou negativo
for ($i = 0; $i < 10; $i++) {
    echo ("\nEscreva um numero\n");
    $numero = readline();
    if ($numero < 0) {
        $negativos++;
    } else {
        $positivos++;
    }

    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impar++;
    }
};

//Exibir na tela os resultados
echo ("\n" . $negativos . " numeros são negativo \n");
echo ($positivos . " numeros são positivo \n");
echo ($impar . " numeros são impar \n");
echo ($pares . " numeros são par \n");
