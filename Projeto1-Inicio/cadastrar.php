
<?php 

include('db.php');

if($_POST){

    $query = db()->prepare("INSERT INTO livros (titulo, autor, descricao) VALUES (:titulo, :autor, :descricao)");
    $livro = $query->execute([
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'descricao' => $_POST['descricao']
    ]);
}

?>

<form action="" method="POST">

<label for="titulo">Titulo</label>
<input type="text" name="titulo"> <br>
<label for="autor">Autor</label>
<input type="text" name="autor"> <br>
<label for="descricao">Descricao</label>
<input type="text" name="descricao"> <br>
<button type="submit">Cadastrar</button>
</form>

<br><a href="index.php">Pagina inicial</a>