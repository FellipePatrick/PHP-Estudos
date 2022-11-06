<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MODULO 1</title>
</head>
<body>
    <?php
        $nome = "Fellipe";
        $idade = 18;
        $opcao = 's';

        switch($opcao) {

            case 's':
                echo 'a opcao escolhida foi sim';
                break;
            case 'n':
                echo 'a opcao escolhida foi nao';
                break;
            default:
                echo 'opcao invalida';
        }

        if ($idade >= 18) {

            $x = 'voce é maior de idade';
        }

        elseif ($idade < 18) {

            $x = 'voce é menor de idade';
        }

        else {

            $x = 'opcao de idade invalida';

        }
        echo '<br>';
        
        switch($x) {
            case 'voce é maior de idade':
                echo 'seu nome é '.$nome.' voce tem '.$idade.' anos '.$x.' pode retirar a carteira de motorista';
                break;
            case 'voce é menor de idade':
                echo 'seu nome é '.$nome.' voce tem '.$idade.' anos '.$x.' não pode retirar a carteira de motorista';
                break;
            case 'opcao de idade invalida':
                echo "a $idade digitada é invalida" ;  
                break;
        }
    
    ?>
</body>
</html>