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
            //while
            $x = 1;
            while($x <= 10) {
                echo "O nmero é: $x <br>";
                $x++;
            }

            //dowhile
            $x = 1;
            do {
                echo "O nmero é: $x <br>";
                $x++;
            }while ($x <= 10);

            //for
            for($cont = 0; $cont<10; $cont++) {
                echo "A variavel vale $cont <br>";
            }
            //foreach
            $vetor = array(1,2,3,4);
            foreach($vetor as $v) {
                echo "o valor correte do vetor é $v.<br>";
            }
        ?>
    </body>
</html>