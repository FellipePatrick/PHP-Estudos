<?php
    include_once("conectar.php");
    $nome = $_POST['nome'];

    $sql = "DELETE FROM usuarios WHERE nome = '$nome'";

    $resultado = mysqli_query($conexao, $sql);

    echo "Exclusao realizada";

    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <table   border="1" width="50%">
            <tr>
                <th>NOME</th> 
                <th>ENDEREÇO</th>
                <th>CIDADE</th>  
            </tr>
            <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = mysqli_query($conexao,$sql);
                while ($registro = mysqli_fetch_array($resultado))
                    {
                        $nome = $registro['nome'];
                        $endereco = $registro['endereco'];
                        $cidade = $registro['cidade'];
                        echo "<tr>";
                        echo "<td>".$nome."</td>";
                        echo "<td>".$endereco."</td>";
                        echo "<td>".$cidade."</td>";
                        echo "</tr>";
                    }
                    mysqli_close($conexao);
                    echo "</table>";
            ?>
        </table>
    </body>
</html>