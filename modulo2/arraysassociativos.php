<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAYS ASSOCIATIVOS</title>
</head>
<body>
    <?php
        $pessoa = array(
            'nome' => 'fellipe',
            'email'=> 'fellipe.patrick@gmail.com'
        );

        //array multidimensionais
        $arraymulti = array(
            'arraynumerico' => array(
                'item1',
                'item2',
                'item3'
            ),
            'arrayassociativo' => array(
                'chave1'=> 'valor1',
                'chave2'=> 'valor2',
                'chave3'=> 'valor3'
            ),
        );

        echo $arraymulti['arraynumerico'][0], '<br>';
        echo $arraymulti['arrayassociativo']['chave1'];

    ?>
</body>
</html>