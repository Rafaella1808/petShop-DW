<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_atendimento.php" method="POST">

        Animais:
        <br>
        <select name="idanimais">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM animais";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idanimais = $linha['idanimais'];
                $nome = $linha['nome'];

                echo "<option value='$idanimais'>$nome</option>";
            }
            ?>

        </select>
        <br><br>

        Funcionario:
        <br>
        <select name="idfuncionario">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM funcionario";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idfuncionario = $linha['idfuncionario'];
                $nome = $linha['nome'];

                echo "<option value='$idfuncionario'>$nome</option>";
            }
            ?>

        </select>

        <br><br>

        Servico: <br>
        <input type="text" name="servico"><br>

        Data: <br>
        <input type="date" name="data"><br>

        Observacoes: <br>
        <input type="text" name="obs"><br>

        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>