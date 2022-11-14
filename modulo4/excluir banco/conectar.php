<?php
    $servername = "localhost";
    $database = "sistemaif";
    $username = "root";
    $senha = "DGnxpJl2dsQq18T*";

    $conexao = mysqli_connect($servername, $username,$senha, $database);

    if (!$conexao) {
        die("Erro de conexão com o Banco de Dados");
    }
?>
