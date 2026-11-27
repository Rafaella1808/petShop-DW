
<?php
require_once "conexao.php";
session_start();

$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$idcliente = $_POST['idcliente'];

$nome_arquivo = uniqid() . "." . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

move_uploaded_file($_FILES['foto']['tmp_name'], "foto_animais/" . $nome_arquivo);

$sql = "INSERT INTO animais (nome, especie, raca, idade, sexo, foto, idcliente) VALUES (?, ?, ?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sssissi", $nome, $especie, $raca, $idade, $sexo, $nome_arquivo, $idcliente);

mysqli_stmt_execute($comando);

header("Location: index.php");
exit;
?>
