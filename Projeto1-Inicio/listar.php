<?php

include('db.php');
include('protect.php');

if (isset($_POST['pesquisar'])) {
    $query = db()->prepare("SELECT * FROM livros WHERE titulo like :pesquisar OR titulo like :pesquisar");
    $query->execute([
        'pesquisar' => '%' . $_POST['pesquisar'] . '%'
    ]);
    $livros = $query->fetchAll();
} else {
    $query = db()->prepare("SELECT * FROM livros");
    $query->execute();
    $livros = $query->fetchAll();
}

?>
<form method="POST">
    <input type="text" name="pesquisar" placeholder="pesquisar...">
    <button type="submit">Pesquisar</button>
</form>

<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Descricao</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= $livro['titulo']; ?></td>
                <td><?= $livro['autor']; ?></td>
                <td><?= $livro['descricao']; ?></td>
                <td>
                    <button> <a href="update.php?id=<?= $livro['id'] ?>">Editar</a> </button>
                </td>
                <td>
                    
                        <form action="deletar.php" method="POST">
                            <button onclick="return confirm('Você realmentre deseja excluir este livro?')"
                                type="submit" name="deletar_livro" value="<?= $livro['id'] ?>">Excluir</button>
                        </form>
                   
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<br><a href="index.php">Pagina inicial</a>