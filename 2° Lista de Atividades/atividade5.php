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

            <input type="number" id="num" name="num" placeholder="Digite um número" class="form-control">

            <input type="submit" class="btn btn-primary btn-lg" value="Calcular" style='width: 100%;'>
        </form>
        <?php

        if ($_POST) {
            $num = isset($_POST["num"]) ? $_POST["num"] : "";

            if ($num % 2 == 0) {
                $par = "PAR";
            } else {
                $par = "IMPAR";
            }

            if ($num >= 0) {
                $positivo = "POSITIVO";
            } else {
                $positivo = "NEGATIVO";
            }
            echo "Esse número é $positivo e $par";
        }

        ?>
    </div>
</body>

</html>