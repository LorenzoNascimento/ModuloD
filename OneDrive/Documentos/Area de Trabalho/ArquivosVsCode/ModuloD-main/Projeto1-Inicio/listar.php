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

<body class="bg-gray-300 flex flex-col items-center justify-center">

    <div class="bg-gray-700 p-8 w-full">
        <h1 class="font-bold text-3xl text-white text-center mb-4">Lista de livros</h1>
    </div>

    <form method="POST" class="flex justify-center mb-4 py-5">
        <input type="text" name="pesquisar" placeholder="pesquisar..." class="p-2 rounded bg-gray-100 border border-gray-400 focus:ring-2 focus:ring-blue-400">
        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 ml-2">Pesquisar</button>
    </form>

    <table class="w-full border-collapse bg-gray-800 text-white">
        <thead>
            <tr class="bg-gray-900">
                <th class="p-3 text-left">Titulo</th>
                <th class="p-3 text-left">Autor</th>
                <th class="p-3 text-left">Descricao</th>
                <th class="p-3 text-left">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($livros as $livro): ?>
                <tr class="border-b border-gray-600">
                    <td class="p-3"><?= $livro['titulo']; ?></td>
                    <td class="p-3"><?= $livro['autor']; ?></td>
                    <td class="p-3"><?= $livro['descricao']; ?></td>
                    <td class="p-3 flex justify-center space-x-2">
                        <a href="update.php?id=<?= $livro['id'] ?>" class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Editar</a>
                        <form action="deletar.php" method="POST">
                            <button onclick="return confirm('Você realmentre deseja excluir este livro?')"
                                type="submit" name="deletar_livro" value="<?= $livro['id'] ?>" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>

    <div class="text-center mt-4 bg-blue-500 rounded px-10 py-2 hover:bg-blue-500 transition">
        <a href="index.php" class="text-white"">Pagina inicial</a>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>