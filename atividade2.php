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

            <input type="number"  id="nulos" name="nulos" placeholder="Votos nulos" class="form-control">
            <input type="number"  id="brancos" name="brancos" placeholder="Votos brancos" class="form-control">
            <input type="number"  id="validos" name="validos" placeholder="Votos validos" class="form-control">
           
            <input type="submit" class="btn btn-primary btn-lg" value="Calcular" style='width: 100%;'>
        </form>
        <?php
        
        if($_POST) {
            $nulos = isset($_POST["nulos"]) ? $_POST["nulos"] : "";
            $brancos = isset($_POST["brancos"]) ? $_POST["brancos"] : "";
            $validos = isset($_POST["validos"]) ? $_POST["validos"] : "";
           
            $total = $nulos + $brancos + $validos;

            echo "<p>".($nulos/$total*100)."% dos votos foram nulos</p>";
            echo "<p>".($brancos/$total*100)."% dos votos foram brancos</p>";
            echo "<p>".($validos/$total*100)."% dos votos foram validos</p>";
            
        }

        ?>
    </div>
</body>

</html>