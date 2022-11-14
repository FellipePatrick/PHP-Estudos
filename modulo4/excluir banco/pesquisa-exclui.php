<?php
    include_once("conectar.php");;
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da Pesquisa</title>
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
        <form name="exclui" action="exclui.php" method="post">
            <p>Digite o nome que deseja excluir:
            <input type="text" name="nome"></p>
            <input type="submit" name="botao" value="Enviar">
        </form>
    </body>
</html>