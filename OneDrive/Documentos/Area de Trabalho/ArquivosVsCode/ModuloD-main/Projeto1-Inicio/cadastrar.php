<?php

include('db.php');
include('protect.php');

if (isset($_FILES['arquivos'])) {

    $arquivo = $_FILES['arquivos'];
    $names = $arquivo['name'];
    $tmp_name = $arquivo['tmp_name'];

    foreach ($names as $name) {
        $extesion = pathinfo($name, PATHINFO_EXTENSION);
        if ($extesion != 'png' && $extesion != 'jpg'  && $extesion != 'jpeg') {
            die('Coloca uma imagem valida animal!');
        }
    }

    foreach ($names as $index => $name) {
        $extesion = pathinfo($name, PATHINFO_EXTENSION);
        $newName = uniqid() . '.' . $extesion;
        move_uploaded_file($tmp_name[$index], 'uploads/' . $newName);
    }
}
if ($_POST) {
    $query = db()->prepare("INSERT INTO livros (titulo, autor, descricao) VALUES (:titulo, :autor, :descricao)");
    $livros = $query->execute([
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'descricao' => $_POST['descricao']
    ]);
}

?>

<body class="bg-gray-300">

    <div class="bg-gray-700 justify-items-center p-5">
        <h1 class="font-bold text-3xl text-white">Cadastro de livros</h1>
    </div>

    <div class="p-3">
        <form method="POST" enctype="multipart/form-data">

            <div class="h-10">
                <label for="titulo" class="font-bold">Titulo</label>
                <input type="text" name="titulo" class="border-2 shadow-xl w-53.25 hover:bg-gray-400" required> <br>
            </div>

            <div class="h-10">
                <label for="autor" class="font-bold">Autor</label>
                <input type="text" name="autor" class="border-2 shadow-xl w-53.5 hover:bg-gray-400" required> <br>
            </div>

            <div class="h-10">
                <label for="descricao" class="font-bold">Descricao</label>
                <input type="text" name="descricao" class="border-2 shadow-xl hover:bg-gray-400" required> <br>
            </div>

            <div class="h-15">
                <label for="arquivos" class="font-bold">Adicione uma capa para o livro</label><br>
                <input type="file" name="arquivos" class="hover:bg-gray-400 border-2"><br>
            </div>

            <div class="flex pt-5">
                <button type="submit" class="border-2 h-10 w-30 bg-gray-400 hover:bg-gray-500">Cadastrar</button>
                <a class="border-2 h-10 w-30 bg-gray-400 hover:bg-gray-500" href="index.php">Voltar</a>
            </div>
        </form>
    </div>

    <div class="p-3">
        
    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>