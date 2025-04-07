<?php

include('db.php');

if ($_POST) {
    $query = db()->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");

    $query->execute([
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ]);

    header('Location: index.php');
}


?>

<body class="bg-gray-300 flex flex-col items-center justify-center min-h-screen">

    <div class="bg-gray-700 justify-items-center p-8 rounded-lg w-96">
        <h1 class="font-bold text-white text-center mb-4 text-3xl">Criar Conta</h1>


        <form method="POST" class="flex flex-col space-y-3 w-75">
            <label for="" class="text-white font-medium">Nome</label>
            <input placeholder="Digite seu nome" type="text" name="nome" class="p-2 rounded bg-gray-100 border border-gray-400 hover:outline hover:ring-2 hover:ring-blue-400"><br>

            <label for="" class="text-white font-medium">Email</label>
            <input placeholder="Digite seu email" type="email" name="email" class="p-2 rounded bg-gray-100 border border-gray-400 hover:outline hover:ring-2 hover:ring-blue-400"><br>

            <label for="" class="text-white font-medium">Senha</label>
            <input placeholder="Digite sua senha" type="password" name="senha" class="p-2 rounded bg-gray-100 border border-gray-400 hover:outline hover:ring-2 hover:ring-blue-400"><br>

            <button type="submit" class="bg-blue-500 rounded py-2 text-white font-semibold hover:bg-blue-600 transition">Enviar</button>

            <div class="text-center mt-4">
                <a href="index.php" class="text-blue-300 hover:underline">Voltar</a>
            </div>

        </form>



    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>