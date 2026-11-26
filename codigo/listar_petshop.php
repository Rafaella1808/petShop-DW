<?php 
require_once "../verifica_sessao.php";

?>

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
    <h2>Lista dos animais</h2>

    <table>
        <tr>
        
            <td>nome</td>
            <td>especie</td>
            <td>raça</td>
            <td>idade</td>
            <td>sexo</td>
            <td>foto</td>
            <td>EDITAR</td>
        </tr>
        <?php
        require_once "../conexao.php";
        
        $sql = "SELECT * FROM animais";
        
        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $nome = $linha['nome'];
            $especie = $linha['especie'];
            $raca = $linha['raca'];
            $idade = $linha['idade'];
            $sexo = $linha['sexo'];
            $foto = $linha['foto'];

            echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$especie</td>";
                echo "<td>$raca</td>";
                echo "<td>$idade</td>";
                echo "<td>$sexo</td>";
                echo "<td>$foto</td>";


        }
            
            
            ?>
    </table>
</body>
</html>