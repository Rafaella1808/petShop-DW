<?php 
require_once "conexao.php";

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$email= $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO funcionario(nome, cargo, email, senha)
VALUES (?, ?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);  

mysqli_stmt_bind_param($comando, "ssss", $nome, $cargo, $email, $senha,);
mysqli_stmt_execute($comando);

header("Location: form_funcionario.php");
?>