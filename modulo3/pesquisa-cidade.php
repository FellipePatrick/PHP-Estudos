
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da Pesquisa</title>
    </head>
    <body>
        <table  width="50%">
            <tr>
                <th>NOME</th> 
                <th>ENDEREÇO</th>
                <th>CIDADE</th>  
            </tr>
            <?php
                include_once("conexao.php");
                $pesquisa = $_POST['cidade'];
                $sql = "SELECT * FROM Usuarios WHERE cidade = '$pesquisa'";
                $resultado = mysqli_query($conexao,$sql);

                while ($registro = mysqli_fetch_array($resultado))
                    {
                        $nome = $registro['nome'];
                        $endereco = $registro['endereco'];
                        $cidade = $registro['cidade'];
                        echo "<tr>";
                        echo "td".$nome."/td";
                        echo "td".$endereco."/td";
                        echo "td".$cidade."/td";
                        echo "</tr>";
                    }
                    mysqli_close($conexao);
                    echo "</table>";
            ?>
        </table>
    </body>
</html>