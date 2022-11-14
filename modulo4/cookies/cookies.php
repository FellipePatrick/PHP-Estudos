<?php
    $nome = "usuarios";
    $valor = "Andreia";
    setcookie($nome, $valor,
              time() + 3600);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookie</title>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE[$nome])){
                echo "Cookie'". $nome ."' não estava atribuido";
            } else {
                echo "Cookie'" .$nome . "' está atribuido <br>";
                echo "Valor:" . $_COOKIE[$nome];
            }
        ?>
    </body>
</html>