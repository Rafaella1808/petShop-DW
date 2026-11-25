<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    
     <form action="salvar_cliente.php" method="post">
        Nome: <br>
        <input type="text" name="nome"><br>
    
        Telefone: <br>
        <input type="text" name="telefone"><br>
   
         Email: <br>
        <input type="text" name="email"><br>
        
        Endereço: <br>
         <input type="text" name="endereco"><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>