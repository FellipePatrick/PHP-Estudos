<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            function soma(){
                $n = 2 + 3;
                return $n;
            }
            //passando parametros
            function exibir($nome) {
                echo $nome;
            }
            exibir("Fellipe");
            // Fazendo alterações na variavel com o &
            function exibirw(&$nome) {
                echo $nome;
            }
            exibir("Fellipe");
            
        
        
        ?>
    </body>
</html>