<?php

include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

if ($_POST) {
    $query = db()->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $query->execute([
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ]);
    if ($pessoa = $query->fetch()) {
        $_SESSION['id'] = $pessoa['id'];
        $_SESSION['nome'] = $pessoa['nome'];
        $_SESSION['email'] = $pessoa['email'];


        echo '<h1> Seja bem vindo ' . $pessoa['nome'] . '</h1>';
    } else {
        echo "email ou senha invalido";
        header('Location: login.php');
    }
}
?>

<form action="" method="POST">
    <label for="">Email</label>
    <input type="email" name="email"><br>
    <label for="">Senha</label>
    <input type="password" name="senha"><br>
    <button>Logar</button>
    <br>
    <h1>Não tem uma conta? crie aqui!</h1>
    <a href="registrar.php">Criar conta</a><br>
    <a href="index.php">Voltar</a>

</form>