<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem-Vindo</title>
    </head>
    <body>
        <?php
            $conexao = mysqli_connect("localhost", "root","DGnxpJl2dsQq18T*", "sistemaif");

            if (!$conexao) {
                die("Erro de conexão com o Banco de Dados");
            }

            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];

            $sql = "INSERT INTO usuarios (nome, endereco, cidade) VALUES ('$nome', '$endereco', '$cidade')";

            $resultado = mysqli_query($conexao, $sql);

            mysqli_close($conexao);

            echo 'Ola '.$nome.', Bem-Vindo ao ifsul';
        ?>
    </body>
</html>