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
        $jogos = [];

        for ($jogo = 0; $jogo < 10; $jogo++) {
            $numeros = [];
            for ($i = 0; $i < 6; $i++) {
                array_push($numeros, rand(1, 60));
            }
            array_push($jogos, $numeros);
        }

        $vet_premiado = [];
        for ($i = 0; $i < 6; $i++) {
            array_push($vet_premiado, rand(1, 60));
        }
        $cont_jogo = 1;
        foreach($jogos as $jogo) {
            $acertos = 0;
            for($i = 0; $i < 6; $i++) {
                for($j = 0; $j < 6; $j++) {
                    if($jogo[$j] == $vet_premiado[$i]) {
                    $acertos++;
                    }
                }
            }
            echo "<p>O jogo $cont_jogo teve $acertos acertos</p>";
            $cont_jogo++;

        }
        
       
        ?>
    </div>
</body>

</html>