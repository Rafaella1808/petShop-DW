<?php 
require_once "conexao.php";

$idanimais = $_POST['idanimais'];
$idfuncionario = $_POST['idfuncionario'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$obs = $_POST['observacoes'];

$sql = "INSERT INTO atendimento (idanimais, idfuncionario, servico, data, observacoes)
VALUES (?, ?, ?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);  

mysqli_stmt_bind_param($comando, "iisss", $idanimais, $idfuncionario, $servico, $data, $observacoes);
mysqli_stmt_execute($comando);

header("Location: form_grupo.php");
?>