<?php 

include('db.php');

if($_POST){

    $query = db()->prepare("DELETE FROM livros WHERE (titulo) VALUES (:titulo)");
    $livros = $query->execute([
        'titulo' => $_POST['titulo']
    ]);
}
?>

<form action="" method="POST">
<label for="titulo">Titulo</label>
<input type="text" name="titulo"> <br> <br>
<button type="submit">Deletar</button>
</form>

<a href="index.php">Pagina inicial</a>