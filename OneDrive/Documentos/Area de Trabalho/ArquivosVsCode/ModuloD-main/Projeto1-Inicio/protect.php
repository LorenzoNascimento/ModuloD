<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Você não tem permissao de acessar essa pagina! faça login para continuar navegando. <a href='login.php'> Login");
}
