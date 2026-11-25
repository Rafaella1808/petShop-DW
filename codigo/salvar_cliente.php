<?php 
require_once "conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email= $_POST['email'];
$endereco = $_POST['endereco'];


$sql = "INSERT INTO cliente (nome, telefone, email, endereco)
VALUES (?, ?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);  

mysqli_stmt_bind_param($comando, "ssss", $nome, $telefone, $email, $endereco,);
mysqli_stmt_execute($comando);

header("Location: principal.php");
?>