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
        <?php
        $vet = [];
        for ($i = 1; $i <= 50; $i++) {
            array_push($vet, rand(0, 100));
        }
        sort($vet); // Ordenar em ordem crescente;

        $total_pares = 0;
        $total_primos = 0;

        foreach ($vet as $number) {

            if ($number % 2 == 0) {
                $total_pares++;
            }

            $divisores = 0;
            for ($i = $number; $i >= 1; $i--) {
                if ($number % $i == 0) {
                    $divisores++;
                }
            }
            if ($divisores == 2) {
                $total_primos++;
            }
        }
        echo "<pre>";
        var_dump($vet);
        echo "</pre>";
        echo "Há $total_pares números pares e $total_primos números primos no vetor";





        ?>
    </div>
</body>

</html>