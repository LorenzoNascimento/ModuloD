<?php

include('db.php');
include('protect.php');

<<<<<<< HEAD
$imagemNome = null;

if (isset($_FILES['arquivos'])) {

=======
if (isset($_FILES['arquivos'])) {

>>>>>>> 15ac55446297b97fb20e4852470d1d97fe7b2f43
    $arquivo = $_FILES['arquivos'];
    $names = $arquivo['name'];
    $tmp_name = $arquivo['tmp_name'];

    foreach ($names as $name) {
        $extesion = pathinfo($name, PATHINFO_EXTENSION);
        if ($extesion != 'png' && $extesion != 'jpg'  && $extesion != 'jpeg') {
<<<<<<< HEAD
            die('Aceitamos imagens apenas do tipo (.PNG .JPG .JPEG) - <a href="cadastrar.php">Voltar!</a>');
=======
            die('Coloca uma imagem valida animal!');
>>>>>>> 15ac55446297b97fb20e4852470d1d97fe7b2f43
        }
    }

    foreach ($names as $index => $name) {
        $extesion = pathinfo($name, PATHINFO_EXTENSION);
        $newName = uniqid() . '.' . $extesion;
<<<<<<< HEAD
        move_uploaded_file($newName[$index], 'uploads/' . $newName);
        $imagemNome = $newName;
    }
}
if ($_POST) {
    $query = db()->prepare("INSERT INTO livros (titulo, autor, descricao, imagem) VALUES (:titulo, :autor, :descricao, :imagem)");
=======
        move_uploaded_file($tmp_name[$index], 'uploads/' . $newName);
    }

}
if ($_POST) {
    $query = db()->prepare("INSERT INTO livros (titulo, autor, descricao) VALUES (:titulo, :autor, :descricao)");
>>>>>>> 15ac55446297b97fb20e4852470d1d97fe7b2f43
    $livros = $query->execute([
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'descricao' => $_POST['descricao'],
        'imagem' => $imagemNome
    ]);
}

?>

<<<<<<< HEAD
<body class="flex items-center justify-center bg-gray-300">

    <div class="bg-gray-700 p-8 rounded-lg w-96 shadow-lg">
        <h1 class="font-bold text-3xl text-white text-center mb-5">Cadastro de livros</h1>



        <form method="POST" enctype="multipart/form-data">

            <div class="mb-4">
                <label for="titulo" class="font-bold text-white block">Titulo</label>
                <input type="text" name="titulo" placeholder="Titulo" class="bg-white w-full px-3 py-2 border rounded hover:outline hover:ring-2 hover:ring-blue-400" required> <br>
            </div>

            <div class="mb-4">
                <label for="autor" class="font-bold text-white block">Autor</label>
                <input type="text" name="autor" placeholder="Autor" class="bg-white w-full px-3 py-2 border rounded hover:outline hover:ring-2 hover:ring-blue-400" required> <br>
            </div>

            <div class="mb-4">
                <label for="descricao" class="font-bold text-white block">Descricao</label>
                <input type="text" name="descricao" placeholder="Descrição" class="bg-white w-full px-3 py-2 border rounded hover:outline hover:ring-2 hover:ring-blue-400" required> <br>
            </div>

            <div class="mb-4">
                <label for="arquivos" class="font-bold block text-white">Adicione uma capa para o livro</label><br>
                <input type="file" name="arquivos[]" class="w-full bg-white border rounded py-2 px-3 hover:outline hover:ring-2 hover:ring-blue-400" multiple>
            </div>

            <button type="submit" class="w-full rounded bg-blue-500 text-white py-2 hover:bg-blue-600 transition font-semibold">Cadastrar</button>
            <a class="block text-center text-blue-300 mt-3 hover:underline" href="index.php">Voltar</a>

        </form>

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
=======
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
>>>>>>> 15ac55446297b97fb20e4852470d1d97fe7b2f43
