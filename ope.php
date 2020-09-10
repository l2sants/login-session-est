<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$conn = new PDO('mysql:host=localhost;dbname=server', 'root', 1234) or die("erro na conexao!");
$stmt = $conn->prepare("SELECT * FROM usuario WHERE nome = :login AND senha = :senha");
$stmt->execute(array('login' => $login, 'senha' => $senha));


$result = $stmt->fetchAll();

if(count($result)) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("Location: site.php");
}
else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("Location: index.php");
}