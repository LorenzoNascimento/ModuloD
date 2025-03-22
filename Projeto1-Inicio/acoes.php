<?php
// if(isset($_SESSION)){
//     session_start();
// }

// if(isset($_POST['cadastrar_livro'])) {
    
//     if(strlen($_POST['nome']) == 0) {
//         header('Location: cadastrar.php');
//         exit();
//     } elseif(strlen($_POST['genero']) == 0) {
//         header('Location: cadastrar.php');
//         exit();
//     } else {
//         $nome = ($_POST['nome']);
//         $genero = ($_POST['genero']);

//         $query = db()->prepare("INSERT INTO livros (nome, genero) VALUES (:nome, :genero)");
//         $user = $query->execute([
//             'nome' => $nome,
//             'genero' => $genero
//         ]);

//         header('Location: cadastrar.php');
//     }
// }

?>