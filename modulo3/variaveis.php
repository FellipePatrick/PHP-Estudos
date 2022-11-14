<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variaveis</title>
    </head>
    <body>
        <?php
            $saldo = 1000;
            function sacar($valor){
                global $saldo;
                $saldo = $saldo -  $valor;                
            }
            function deposita($valor){
                global $saldo;
                $saldo = $saldo + $valor;   
            }
            deposita(500);
            sacar(150);
            echo "Novo saldo é: ".$saldo;

            //Função recursiva
            function calculaf($numf)
            {
                if($numf <= 1){
                    $numf = $numf;
                }else {
                    $numf *= calculaf($numf-1);
                }
                return $numf;
            }
            $num = 4;
            echo "<br>".calculaf($num);
        ?>
    </body>
</html>