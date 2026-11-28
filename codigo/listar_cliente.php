<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border-style: solid;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h2>Lista dos Clientes</h2>

    <table>
        <tr>
        
            <td>nome</td>
            <td>telefone</td>
            <td>email</td>
            <td>endereco</td>
           
        </tr>
        <?php
        require_once "conexao.php";
        
        $sql = "SELECT * FROM cliente";
        
        $resultados = mysqli_query($conexao, $sql);
        
       
        while ($linha = mysqli_fetch_array($resultados)) {
            $nome = $linha['nome'];
            $telefone = $linha['telefone'];
            $email = $linha['email'];
            $endereco = $linha['endereco'];
           
            echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$telefone</td>";
                echo "<td>$email</td>";
                echo "<td>$endereco</td>";
                


        }
            
            
            ?>
    </table>
</body>
</html>