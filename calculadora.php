<?php
$numero1;
$numero2;
$op;

echo ("\n Informe o primeiro numero \n");
$numero1 = readline();

echo ("\n Informe o segundo numero \n");
$numero2 = readline();

do {
    echo ("\n Escolha a operação que deseja realizar \n");
    echo ("1 - Soma\n");
    echo ("2 - Subtração\n");
    echo ("3 - Multiplicação\n");
    echo ("4 - Divisão\n");
    echo ("0 - Sair\n");
    $op = readline();

    switch ($op) {
        case 1:
            $soma = $numero1 + $numero2;
            echo ("O resultado da soma é: " . $soma . "\n");
            break;
        case 2:
            $subtracao = $numero1 - $numero2;
            echo ("O resultado da subtração é: " . $subtracao . "\n");
            break;

        case 3:
            $multiplicacao = $numero1 * $numero2;
            echo ("O resultado da multiplicação é: " . $multiplicacao . "\n");
            break;

        case 4:
            $divisao = $numero1 / $numero2;
            echo ("O resultado da divisão é: " . $divisao . "\n");
            break;
        default;
            echo ("\n Selecione uma opção valida \n");
    }
} while ($op != 0);
