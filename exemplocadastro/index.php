<?php

$db = new PDO('sqlite:database.sqlite');

$query = $db->prepare("select * from usuario where id = :id");
$query->execute(['id' => 3]);
$usuario = $query->fetch();


echo "<pre>";
var_dump($usuario);
echo "</pre>";


$q = $db->prepare("insert into usuarios(nome, email, senha) values (:nome, :email, :senha)");

$users = $q->execute([
    'nome' => 'Leonardo',
    'email' => 'leonardo@leo.com.br',
    'senha' => '123456'
]);


$query = $db->query("select * from usuarios");
$usuarios = $query->fetchAll();

echo '<pre>';
var_dump($usuarios);
echo '</pre>';


?>