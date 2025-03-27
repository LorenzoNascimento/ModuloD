<?php 

include('db.php');

if($_POST){
    $query = db()->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");

    $query->execute([
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ]);
    
    header('Location: index.php');
}


?>


<form action="" method="POST">
    <label for="">Nome</label>
    <input type="text" name="nome"><br>
    <label for="">Email</label>
    <input type="email" name="email"><br>
    <label for="">Senha</label>
    <input type="password" name="senha"><br>
    <button type="submit">Enviar</button>
</form> 

<a href="index.php">Voltar</a>