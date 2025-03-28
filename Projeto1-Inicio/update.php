<?php

include('db.php');
include('protect.php');

if ($_POST) {

    $query = db()->prepare("UPDATE livros SET titulo = :titulo, autor = :autor, descricao = :descricao WHERE titulo = :nome");
    $update = $query->execute([
        'nome' => $_POST['nome'],
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'descricao' => $_POST['descricao']
    ]);

    $results = $query->fetch();
}

?>

<form action="" method="POST">
    <label for="">Nome do livro de que deseja alterar</label>
    <input type="text" name="nome"><br>
    <hr>
    <p>Digite as alterções</p>
    <label for="">Titulo</label>
    <input type="text" name="titulo"><br>
    <label for="">Autor</label>
    <input type="text" name="autor"><br>
    <label for="">Descricao</label>
    <input type="text" name="descricao">
    <button type="submit">Salvar</button>
</form>
<a href="index.php">Voltar</a>