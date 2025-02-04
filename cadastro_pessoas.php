<?php

$pessoas = [];
$nome;
$idade;
$sexo;

for ($i = 0; $i < 2; $i++) {


    echo ("Informe o nome da " . $i + 1 . "° pessoa \n");
    $nome = readline();


    echo ("Informe a idade da " . $i + 1 . "° pessoa \n");
    $idade = readline();

    echo ("Informe a cidade da " . $i + 1 . "° pessoa \n");
    $cidade = readline();


    echo ("Informe o sexo da " . $i + 1 . "° pessoa \n");
    $sexo = readline();

    $pessoa[] = [
        'nome' => $nome,
        'idade' => $idade,
        'cidade' => $cidade,
        'sexo' => $sexo
    ];
}
    for ($i = 0; $i < 2; $i++) {
        echo "- O nome é " . $pessoa[$i]['nome'] . "\n";

        echo "- tem " . $pessoa[$i]['idade'] . " anos\n";
    }

    for ($i = 0; $i < 2; $i++) {
        if ($pessoa[$i]['cidade'] == 'santos') {
            echo "O " . $pessoa[$i]['nome'] . " é de Santos\n";
        }
    }

    for ($i = 0; $i < 2; $i++) {
        if ($pessoa[$i]['idade'] > 18) {
            echo "O " . $pessoa[$i]['nome'] . " tem mais de 18 anos\n";
        }
    }

    for ($i = 0; $i < 2; $i++) {
        if ($pessoa[$i]['sexo'] == "m") {
            echo "O " . $pessoa[$i]['nome'] . " é do sexo masculino \n";
        }
    }

