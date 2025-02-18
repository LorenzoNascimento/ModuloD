<?php

//Vincular com o banco de dados
$db = new PDO('sqlite:bancoteste.sqlite');
$op = 0;

//selecionar oque deseja fazer com a tabela
while ($op != 6) {
    echo "\n Bem vindo o menu de usuairo \n";
    echo " Selecione uma opção! \n";
    echo "1 - Cadastrar usuario \n";
    echo "2 - Editar usuario \n";
    echo "3 - Deletar usuario \n";
    echo "4 - Exibir todos os usuarios da tabela \n";
    echo "5 - Exibir usuario por email \n";
    echo "6 - Sair \n";
    $op = readline();

    switch ($op) {
        case 1:

            //Cadastrar usuario |
            $insert = $db->prepare("insert into Pessoas (nome, email, senha) values (:nome, :email, :senha)");

            $user = $insert->execute([
                'nome' => 'Lorenzo',
                'email' => 'lorenzo@gmail.com',
                'senha' => '1234'
            ]);
            break;
        case 2:

            //Alterar cadastro por email |
            $update = $db->prepare("update pessoas set nome = :nome, email = :email, senha = :senha where email = 'lorenzo@gmail.com'");
            $update->execute([
                'nome' => 'lorenzo',
                'email' => 'lorenzoteste@gmail.com',
                'senha' => '1234567890'
            ]);
            break;
        case 3:

            // Deletar usuario por email |
            $deletar = $db->prepare("delete from pessoas where email = :email");
            $deletar->execute(['email' => 'lorenzoteste@gmail.com']);
            break;
        case 4:

            // Mostrar todos os usuairos cadastrados |
            $mostrar = $db->query("select * from pessoas");
            $usuarios = $mostrar->fetchAll();

            print_r($usuarios);
            break;
        case 5:

            //Mostrar usuario por email |
            $procurar = $db->prepare("select * from pessoas where email = :email");
            $procurar->execute(['email' => 'lorenzo@gmail.com']);
            $usuario = $procurar->fetch();


            print_r($usuario);
            break;
            default:
            echo "Informe uma opção valida!!";
    }
}
