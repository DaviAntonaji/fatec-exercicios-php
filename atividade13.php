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

            <input type="number" id="number" name="number" placeholder="Digite um número" class="form-control">

            <input type="submit" class="btn btn-primary btn-lg" value="Criar" style='width: 100%;'>
        </form>
        <?php
        if($_POST) {
            $vet = [];
            $number = $_POST['number'];
            for ($i = 1; $i <= $number; $i++) {
                array_push($vet, rand(0, 100));
            }
           
            $soma = 0;
            foreach($vet as $number) {
                $soma+=$number;
            }
            $media = $soma / count($vet);
            echo "A soma do vetor é: $soma e a média é: $media";
            echo "<br> Vetor: <pre>";
            var_dump($vet);
            echo "</pre>";


        }
        ?>
    </div>
</body>

</html>