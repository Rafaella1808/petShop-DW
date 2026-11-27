<?php
require_once "conexao.php";
session_start();

$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$foto = $_FILES['foto'];
$idcliente = $_POST['idcliente'];

$file_name = $_FILES['foto']['name'];
$temp_road = $_FILES['foto']['tmp_name'];

$extensao = pathinfo($file_name, PATHINFO_EXTENSION);
$novo_name = uniqid() . "." . $extensao;

$sql = "SELECT * FROM animais WHERE nome = ? AND idcliente = ?";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "si", $nome, $idcliente);

mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);

if (mysqli_num_rows($resultado) == 0) {

if (move_uploaded_file($temp_road, "foto_animais/" . $novo_nome)) {       
     $sql = "INSERT INTO animais (nome, especie, raca, idade, sexo, foto, idcliente)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $comando = mysqli_prepare($conexao, $sql);

     mysqli_stmt_bind_param($comando, "sssissi", $nome, $especie, $raca, $idade, $sexo, $novo_nome, $idcliente);
        mysqli_stmt_execute($comando);
    
        } else {
        echo "Erro ao salvar a foto!";
    }
} else {
    echo "Já cadastrado!";
}

mysqli_stmt_execute($comando);

header("Location: principal.php");
exit;
?>