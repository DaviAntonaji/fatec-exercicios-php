<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3° Lista de Atividades - Davi de Melo Antonaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <?php

    $file = fopen("nome_aluno.txt", "w+");

    fwrite($file, "Mangangá também ronca; vai-se ver, não é ninguém\n");
    fwrite($file, "A sabedoria serve de freio à juventude, de consolação à velhice, de riqueza aos pobres e de ornamento aos ricos\n");
    fwrite($file, "Se a rico queres chegar, vai devagar \n");

    foreach (file("nome_aluno.txt") as $line) {
        echo $line . "<br>";
    }

    ?>


</body>

</html>