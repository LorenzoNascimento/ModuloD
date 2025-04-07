<?php
include('db.php');

$query = db()->prepare("SELECT * FROM livros ORDER BY id DESC");
$query->execute();
$livros = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="justify-items-center bg-gray-500">

    <div class="flex bg-gray-700 w-full pt-5">

        <div class="w-full grid justify-items-center text-white">
            <a href="registrar.php" class="font-bold hover:text-black">Criar Conta</a><br>
        </div>
        <div class="w-full grid justify-items-center">
            <a href="login.php" class="font-bold text-white hover:text-black">Login</a><br>
        </div>
        <div class="w-full grid justify-items-center">
            <a href="cadastrar.php" class="font-bold text-white hover:text-black">Cadastrar livros</a><br>
        </div>
        <div class="w-full grid justify-items-center">
            <a href="listar.php" class="font-bold text-white hover:text-black">Ver Livros</a><br>
        </div>
        <div class="w-full grid justify-items-center">
            <a href="logout.php" class="font-bold text-white hover:text-black">Logout</a><br>
        </div>

    </div>

    <h1 class="text-4xl py-10 font-bold w-96 text-center text-white ">Livros disponiveis</h1>

    <?php foreach ($livros as $livro): 
 
        ?>
        

        <div class="bg-gray-700 py-5 w-full text-center text-white border-2 border-gray-800 shadow-2xl">
            
            <img  style="width: 200px; height: 200px;" class="place-self-start px-10 flex flex-col justify-center" src="uploads/<?php echo $livro['imagem']; ?>"  alt="Capa do livro" >

            <div>
                <p class="font-semibold text-2xl"><?php echo htmlspecialchars($livro['titulo']); ?></p>
                <p class="text-lg"><?php echo substr(htmlspecialchars($livro['descricao']), 0, 100) . '...'; ?></p>
            </div>

        </div>


    <?php endforeach ?>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>