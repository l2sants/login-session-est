<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "select * from usuario where name =". $login . " and senha = " . $senha;

var_dump($sql);
$conn = new PDO('mysql:host=localhost;dbname=server', 'root', 1234) or die("erro na conexao!");
$stmt = $conn->prepare("SELECT * FROM usuario WHERE nome = :login AND senha = :senha");
$stmt->execute(array('login' => $login, 'senha' => $senha));
$nome = $conn->query($sql);
var_dump($nome);
$result = $stmt->fetchAll();
// var_dump($conn);
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