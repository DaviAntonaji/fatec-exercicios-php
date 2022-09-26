<?php

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$n1 = isset($_POST['n1']) ? $_POST['n1'] : "";
$n2 = isset($_POST['n2']) ? $_POST['n2'] : "";
$n3 = isset($_POST['n3']) ? $_POST['n3'] : "";
$n4 = isset($_POST['n4']) ? $_POST['n4'] : "";



?>

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
            <input value="<?=$nome?>" class="form-control" type="text" placeholder="Digite o nome do aluno" id="nome" name="nome" required>
            <input value="<?=$n1?>" class="form-control" type="number" step="any" placeholder="Digite a primeira nota" id="n1" name="n1" required>
            <input value="<?=$n2?>" class="form-control" type="number" step="any" placeholder="Digite a segunda nota" id="n2" name="n2" required>
            <input value="<?=$n3?>" class="form-control" type="number" step="any" placeholder="Digite a terceira nota" id="n3" name="n3" required>
            <input value="<?=$n4?>" class="form-control" type="number" step="any" placeholder="Digite a quarta nota" id="n4" name="n4" required>
            
            
            <?php

            if ($_POST) {
                
                if (!isset($_POST["exame"])) {

                    $media = ($n1 + $n2 + $n3 + $n4) / 4;
                    if ($media >= 7) {
                        echo "O Aluno $nome foi aprovado com média $media";
                    } else {
                        echo '<input class="form-control" type="number" step="any" placeholder="Digite a nota de exame" id="exame" name="exame" required>
            ';
                    }
                } else {
                    $exame = $_POST["exame"];
                    $media = ((($n1 + $n2 + $n3 + $n4) / 4) + $exame) / 2;
                    if ($media >= 5) {
                        echo "O Aluno $nome foi aprovado com média $media";
                    } else {
                        echo "O Aluno $nome foi reprovado com média $media";
                    }
                }
            }

            ?>

            <input type="submit" class="btn btn-primary btn-lg" value="Verificar classificação" style='width: 100%;'>


        </form>

    </div>
</body>

</html>