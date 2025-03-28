<?php

include('db.php');
include('protect.php');

$query = db()->prepare('SELECT * FROM livros');
$query->execute();

$livros = $query->fetchAll();

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Descricao</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= $livro['id'] ?></td>
                <td><?= $livro['titulo']; ?></td>
                <td><?= $livro['autor']; ?></td>
                <td><?= $livro['descricao']; ?></td>
                <!-- <td><a href="update.php">Editar</a></td>
        <td><a href="deletar.php">Deletar</a></td> -->
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<br><a href="index.php">Pagina inicial</a>