<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Animais</h1>
    
    <form action="salvar_animais.php" method="post">
        Nome: <br>
        <input type="text" name="nome"><br>
        
        Especie: <br>
        <input type="text" name="especie"><br>

        Raça: <br>
        <input type="text" name="raca"><br>

        Idade: <br>
        <input type="text" name="idade"><br>

         Sexo: <br>
        <input type="text" name="sexo"><br>

         Foto: <br>
        <input type="file" name="foto"><br>

        <a href="principal.php">Voltar</a>

        


        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>