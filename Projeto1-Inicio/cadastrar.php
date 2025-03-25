<?php 

include('db.php');

if($_POST){

    $query = db()->prepare("INSERT INTO livros (titulo, autor, descricao) VALUES (:titulo, :autor, :descricao)");
    $livros = $query->execute([
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'descricao' => $_POST['descricao']
    ]);
}

?>

<form action="" method="POST">

<label for="titulo">Titulo</label>
<input type="text" name="titulo" required> <br>
<label for="autor">Autor</label>
<input type="text" name="autor" required> <br>
<label for="descricao">Descricao</label>
<input type="text" name="descricao" required> <br>
<button type="submit">Cadastrar</button>
</form>

<br><a href="index.php">Pagina inicial</a>