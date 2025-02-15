<?php

include 'usuario.php';
$op = 0;
$u = new Usuario();

function cadastrar(){
    $db = new PDO('sqlite:usuariodb.sqlite');
    $q = $db->prepare("insert into Usuarios(not null, nome, email, senha) values (not null, :nome, :email, :senha)");

$users = $q->execute([
    'nome' => 'Leonardo',
    'email' => 'leonardo@leo.com.br',
    'senha' => '123456'
]);
    return $db = new PDO('sqlite:usuariodb.sqlite');
}


while ($op != 4) {

    echo "\n Bem vindo ao cadastro de usuario \n";
    echo "\n Escolha uma opção: \n";
    echo "1 - Cadastrar \n";
    $op = readline();

    switch ($op) {

        case 1:
            cadastrar();
            break;
    }
}

?>