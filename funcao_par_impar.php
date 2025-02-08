<?php

function parImpar($n1)
{
    return ($n1 % 2 == 0) ? "Par" : "Impar";

}

$resultado = parImpar(6);
echo $resultado;