<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3° Lista de Atividades - Davi de Melo Antonaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        input {
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <form method="post">

            <input type="text" name="time1" id="time1" class="form-control" placeholder="1° Time">
            <input type="text" name="time2" id="time2" class="form-control" placeholder="2° Time">
            <input type="text" name="time3" id="time3" class="form-control" placeholder="3° Time">
            <input type="text" name="time4" id="time4" class="form-control" placeholder="4° Time">
            <input type="text" name="time5" id="time5" class="form-control" placeholder="5° Time">

            <input type="submit" value="Cadastrar" class="btn btn-primary btn-lg">

        </form>

        <?php

        if ($_POST) {
            $time1 = $_POST['time1'];
            $time2 = $_POST['time2'];
            $time3 = $_POST['time3'];
            $time4 = $_POST['time4'];
            $time5 = $_POST['time5'];

            $f = fopen("times.txt", "w+");

            fwrite($f, $time1 . "\n");
            fwrite($f, $time2 . "\n");
            fwrite($f, $time3 . "\n");
            fwrite($f, $time4 . "\n");
            fwrite($f, $time5 . "\n");
        }
        echo "Conteudo do arquivo:<br>";
        if (file_exists("times.txt")) {
            foreach (file("times.txt") as $line) {
                echo $line . "<br>";
            }
        }


        ?>
    </div>


</body>

</html>