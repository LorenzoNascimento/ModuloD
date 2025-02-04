<?php
$numero = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$valor;
$tela;

//Salvar valor digitado pelo usuario para multiplicar
echo ("\ndigite um numeros para multiplicar os valores do vetor!\n");
$valor = readline();

echo ("\nO resultado dos numeros multiplicados por " . $valor . " é\n");

//pegar o valor de dentro do array, multiplicar pelo valor dito pelo usuario e mandar para uma variavel que será exibida na tela
foreach ($numero as $a) {
    $tela = $a * $valor;

    //exibir na tela o resultado
    echo ($tela . "\n");
};
