<?php
if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
    <style>
        div {
            border-style: solid;
            margin-top: 5px;
            margin-bottom: 5px;
            width: 240px;
        }
    </style>
</head>

<body>
    <h2>Pesquisa de Animais</h2>

    <form action="pesquisar_animais.php">
        Nome: <br>
        <input type="text" name="valor" value="<?php echo $valor; ?>">
        <br><br>
        <input type="submit" value="Pesquisar">

        <br><br>
        <a href="tela_inicial.php">Voltar...</a>
    </form>

    <?php
    if (isset($_GET['valor'])) {
        if ($_GET['valor'] != "") {
            $valor = $_GET['valor'];
            $valor = "%" . $valor . "%";

            require_once "conexao.php";

            // SELECT * FROM usuario WHERE nome LIKE "%z%" OR apelido LIKE "%z%";
            $sql = "SELECT * FROM animais";
            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "ss", $valor, $valor);

            mysqli_stmt_execute($comando);
            $animal = mysqli_stmt_get_result($comando);

            while ($animais = mysqli_fetch_array($animal)) {
    ?>
                <div>
                    <p>Nome: <?php echo $animais['nome']; ?></p>
                    <p>Usuário: <?php echo $animais['username']; ?></p>

                </div>
            <?php
            }
        } else {
            ?>
            <p>Digite algo para pesquisar</p>
        <?php
        }
    } else {
        $valor = "";
        ?>
        <p>Digite algo para pesquisar</p>
    <?php
    }
    ?>
</body>

</html>