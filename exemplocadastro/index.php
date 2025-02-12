<?php

include 'Usuario.php';

$cont = 1;
$usuarios = [];
$op = 0;
$u = new Usuario();

while ($op != 6) {

    echo "\nBem vindo ao cadastro de usuario \n";
    echo "Escolha uma opção: \n";
    echo "1 - Cadastrar \n";
    echo "2 - Mostrar Todos \n";
    echo "3 - Deletar usuario \n";
    $op = readline();

    switch ($op) {

        case 1:
            echo "Informe seu nome: \n";
            $n = readline();
            echo "Informe seu email: \n";
            $e = readline();
            echo "Informe sua senha: \n";
            $s = readline();

            $usuarios =  $u->cadastrar($n, $e, $s, $usuarios, $cont);

            if ($cont == count($usuarios)) {
                $cont++;
            }

            var_dump($usuarios);
            break;
        case 2:
            $u->mostrar($usuarios);
            break;
        case 3:
            echo "\n Informe o email do usuario que deseja deletar \n";
            $email = readline();
            
            $u->deletar($usuarios, $email, $cont);
            break;
    }
}
