<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAYS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <?php

        echo ' 
                <div class="container" style="margin-top: 100px;">
                <div class="row d-flex justify-content-center">
                    <div class=" col-md-5 border border-2 p-3">
                        <div class="image d-flex justify-content-center">
                            <img src="ifsullogo.png"  width="150px"  alt="">
                        </div>
                        <form class="form-horizontal mx-5" action="cadastro.php" method="post">
                            <div class="form-group ">
                            <label class="control-label col-sm-2" for="email">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome"  placeholder="nome">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Endereço:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="endereco" " placeholder="endereco">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Cidade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cidade" placeholder="cidade">
                            </div>
                            </div>         
                            <div class="d-flex d-flex justify-content-center my-4">
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-sm">enviar</button>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="reset" class="btn btn-default btn-sm">limpar</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      ';

    ?>


</body>
</html>