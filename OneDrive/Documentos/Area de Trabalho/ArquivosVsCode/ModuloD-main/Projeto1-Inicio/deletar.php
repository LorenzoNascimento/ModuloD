<?php

include('db.php');
include('protect.php');

if(isset($_POST['deletar_livro'])){
    $query = db()->prepare("DELETE FROM livros WHERE id = :id");
   $livro = $query->execute([
        'id' => $_POST['deletar_livro']
    ]);
    
    if($livro){
        header('Location: listar.php');
    }else{
        echo 'Delete falhou!';
    }

}



?>