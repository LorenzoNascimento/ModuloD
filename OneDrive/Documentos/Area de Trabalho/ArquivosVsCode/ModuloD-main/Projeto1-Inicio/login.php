<?php

include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

if ($_POST) {
    $query = db()->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $query->execute([
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ]);
    if ($pessoa = $query->fetch()) {
        $_SESSION['id'] = $pessoa['id'];
        $_SESSION['nome'] = $pessoa['nome'];
        $_SESSION['email'] = $pessoa['email'];


        echo '<h1 class="font-bold text-black text-center"> Seja bem vindo ' . $pessoa['nome'] . '</h1>';
    } else {
        echo "email ou senha invalido";
        header('Location: login.php');
    }
}
?>

<body class="bg-gray-300 flex flex-col items-center justify-center min-h-screen">

    <div class="bg-gray-700 justify-items-center p-8 rounded-lg w-96">
        <h1 class="font-bold text-3xl text-white text-center mb-4">Login</h1>
    
    <form method="POST" class="flex flex-col space-y-3">

        <label for="" class="text-white font-medium">Email</label>
        <input placeholder="Digite o email" type="email" name="email" class="p-2 rounded bg-gray-100 border border-gray-400 hover:outline hover:ring-2 hover:ring-blue-400"><br>

        <label for="" class="text-white font-medium">Senha</label>
        <input placeholder="Digite a senha" type="password" name="senha" class="p-2 rounded bg-gray-100 border border-gray-400 hover:outline hover:ring-2 hover:ring-blue-400"><br>

        <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition">Logar</button>

        <div class="text-center mt-4">
        <h2 class="text-white font-semibold ">Não tem uma conta? crie uma abaixo!</h2>
        <a href="registrar.php" class="text-blue-300 hover:underline">Criar conta</a><br>
        <a href="index.php" class="text-blue-300 hover:underline">Voltar</a>
        </div>
    </form>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>