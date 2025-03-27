<?php

include('db.php');

if(!isset($_SESSION)){
    session_start();
}

if($_POST){
    $query = db()->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $query->execute([
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ]);
    if($pessoa = $query->fetch()){
        echo '<h1> Seja bem vindo ' . $pessoa['nome'] . '</h1>';
    } else {
        echo "Usuario não encontrado";
        header('Location: login.php');
    }
}
?>

<form action="" method="POST">
<label for="">Email</label>
<input type="email" name="email">
<label for="">Senha</label>
<input type="password" name="senha">
<button>Logar</button>

</form>