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

<body class="bg-gray-300 flex flex-col items-center justify-center min-h-screen">

    <div class="bg-gray-700 p-8 rounded-lg w-96 shadow-lg">
        <h1 class="text-white font-bold text-3xl text-center mb-5">Editar Livro</h1>
        <form method="POST">

            <div class="mb-4">
                <label class="text-white font-semibold block" for="">Titulo</label>
                <input type="text" name="titulo" class="bg-white w-full px-3 py-2 border rounded hover:outline hover:ring-2 hover:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="text-white font-semibold block" for="">Autor</label>
                <input type="text" name="autor" class="bg-white w-full px-3 py-2 border rounded hover:outline hover:ring-2 hover:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="text-white font-semibold block" for="">Descricao</label>
                <input type="text" name="descricao" class="bg-white w-full px-3 py-2 border rounded hover:outline hover:ring-2 hover:ring-blue-400">
            </div>

            <button onclick="return confirm('Deseja alterar as informações deste livro?')" type="submit" class="w-full rounded bg-blue-500 text-white py-2 hover:bg-blue-600 transition font-semibold">Salvar</button>

            <a href="listar.php" class="block text-center text-blue-300 mt-3 hover:underline">Voltar</a>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>