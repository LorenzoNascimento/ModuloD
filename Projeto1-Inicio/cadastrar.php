<?php

include('db.php');
include('protect.php');

if (isset($_FILES['arquivos'])) {

    $arquivo = $_FILES['arquivos'];
    $names = $arquivo['name'];
    $tmp_name = $arquivo['tmp_name'];

    foreach ($names as $name) {
        $extesion = pathinfo($name, PATHINFO_EXTENSION);
        if ($extesion != 'png' && $extesion != 'jpg'  && $extesion != 'jpeg') {
            die('Coloca uma imagem valida animal!');
        }
    }

    foreach ($names as $index => $name) {
        $extesion = pathinfo($name, PATHINFO_EXTENSION);
        $newName = uniqid() . '.' . $extesion;
        move_uploaded_file($tmp_name[$index], 'uploads/' . $newName);
    }

}
if ($_POST) {
    $query = db()->prepare("INSERT INTO livros (titulo, autor, descricao) VALUES (:titulo, :autor, :descricao)");
    $livros = $query->execute([
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'descricao' => $_POST['descricao']
    ]);
}

?>

<form method="POST" enctype="multipart/form-data">

    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" required> <br>
    <label for="autor">Autor</label>
    <input type="text" name="autor" required> <br>
    <label for="descricao">Descricao</label>
    <input type="text" name="descricao" required> <br>
    <label for="arquivos">Adicione uma capa para o livro</label>
    <input type="file" name="arquivos[]" multiple><br>

    <button type="submit">Cadastrar</button>
</form>




<br><a href="index.php">Pagina inicial</a>