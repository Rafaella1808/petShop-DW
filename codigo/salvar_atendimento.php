<?php 
require_once "conexao.php";

$animais = $_POST['animais'];
$funcionario = $_POST['funcionario'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$obs = $_POST['observacoes'];

$sql = "INSERT INTO atendimento (animais, funcionario, servico, data, observacoes)
VALUES (?, ?, ?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);  

mysqli_stmt_bind_param($comando, "sssss", $animais, $funcionario, $servico, $data, $observacoes);
mysqli_stmt_execute($comando);

header("Location: form_grupo.php");
?>