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

            <input type="number" step="any" id="a" name="a" placeholder="Lado A" class="form-control">
            <input type="number" step="any" id="b" name="b" placeholder="Lado B" class="form-control">
            <input type="number" step="any" id="c" name="c" placeholder="Lado C" class="form-control">

            <input type="submit" class="btn btn-primary btn-lg" value="Calcular" style='width: 100%;'>
        </form>
        <?php

        if ($_POST) {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            if (
                ($a == $b && $b != $c) ||
                ($a == $c && $c != $b) ||
                ($b == $c && $c != $a)
            ) {
                echo "O triangulo é isósceles";
            } elseif ($a == $b && $a == $c) {
                echo "O triangulo é equilátero";
            } elseif ($a != $b && $a != $c && $b != $c) {
                echo "O triangulo é escaleno";
            }
        }

        ?>
    </div>
</body>

</html>