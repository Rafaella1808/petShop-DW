<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Animais</h1>
    
    <form action="salvar_animais.php" method="post" enctype="multipart/form-data">
        
    Cliente:
        <br>
        <select name="idcliente">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM cliente";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idcliente = $linha['idcliente'];
                $nome = $linha['nome'];

                echo "<option value='$idcliente'>$nome</option>";
            }
            ?>

        </select>
        <br><br>

    
        Nome: <br>
        <input type="text" name="nome"><br>
        
        Especie: <br>
        <input type="text" name="especie"><br>

        Raça: <br>
        <input type="text" name="raca"><br>

        Idade: <br>
        <input type="text" name="idade"><br>

        Sexo: <br>
     <input type="radio" name="sexo" value="Feminino"> Feminino
    <br>

    <input type="radio" name="sexo" value="Masculino"> Masculino 
    <br>

         Foto: <br>
        <input type="file" name="foto"><br>

        <a href="tela_inicial.php">Voltar</a>

        


        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>