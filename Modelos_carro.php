<?php

$carro = [];
$modelo;
$fabricante;
$cor;
$portas;
$ano;

for ($i = 0; $i < 1; $i++) {
    echo "Informe a fabricante do carro\n";
    $fabricante = readline();
    echo "Informe o modelo do carro\n";
    $modelo = readline();
    echo "Informe a cor do carro\n";
    $cor = readline();
    echo "Informe a quantia de portas do carro\n";
    $portas = readline();
    echo "Informe o ano do carro\n";
    $ano = readline();

    $carro [] = [
        'fabricante' => $fabricante,
        'modelo' => $modelo,
        'cor' => $cor,
        'portas' => $portas,
        'ano' => $ano
    ];
}

for ($i = 0; $i < 1; $i++) {
    echo "\n O modelo do carro é: " . $carro[$i]['modelo'] . "\n";
    echo " O ano de fabricação do carro é: " . $carro[$i]['ano'] . "\n";
}

for ($i = 0; $i < 1; $i++) {
    if($carro[$i]['cor'] == "prata"){
        echo "O " . $carro[$i]['modelo'] . " é da cor prata\n";
    }
}

for ($i = 0; $i < 1; $i++) {
    if($carro[$i]['cor'] == "prata"){
        echo "\nO " . $carro[$i]['modelo'] . " é da cor prata\n";
    }
}

for ($i = 0; $i < 1; $i++) {
    echo "\n O modelo do carro é: " . $carro[$i]['modelo'] ." tem " . $carro[$i]['portas'] . " portas e é da cor " . $carro[$i]['cor'] . "\n";
}