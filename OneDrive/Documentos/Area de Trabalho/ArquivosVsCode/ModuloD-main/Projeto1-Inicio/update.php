<?php

include('db.php');
include('protect.php');

if ($_POST) {

    $query = db()->prepare("UPDATE livros SET titulo = :titulo, autor = :autor, descricao = :descricao WHERE id = :id");
    $update = $query->execute([
        'id' => $_GET['id'],
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'descricao' => $_POST['descricao']
    ]);

    $results = $query->fetch();
}

?>

<form action="" method="POST">
    <p>Digite as alterções</p>
    <label for="">Titulo</label>
    <input type="text" name="titulo"><br>
    <label for="">Autor</label>
    <input type="text" name="autor"><br>
    <label for="">Descricao</label>
    <input type="text" name="descricao">
    <button onclick="return confirm('Deseja alterar as informações deste livro?')" type="submit">Salvar</button>
</form>
<a href="listar.php">Voltar</a>