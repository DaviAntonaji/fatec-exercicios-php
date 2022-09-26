<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-control {
            margin-bottom: 7.5px;
            margin-top: 7.5px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post">

            <input type="number" id="idade" name="idade" placeholder="Digite a idade" class="form-control">

            <input type="submit" class="btn btn-primary btn-lg" value="Verificar classificação" style='width: 100%;'>
        </form>
        <?php

        if ($_POST) {
            $idade =  $_POST["idade"];
            
            $classificacao = "Invalida";
            if($idade >= 5 && $idade <= 7) {
                $classificacao = "Infantil A";
            }else if($idade >= 8 && $idade <= 11) {
                $classificacao = "Infantil B";
            }else if($idade >= 12 && $idade <= 13) {
                $classificacao = "Juvenil A";
            }else if($idade >= 14 && $idade <= 17) {
                $classificacao = "Juvenil B";
            }else if($idade >= 18 ) {
                $classificacao = "Adultos";
            }
            echo "A classificação desse nadador é $classificacao";
        }

        ?>
    </div>
</body>

</html>