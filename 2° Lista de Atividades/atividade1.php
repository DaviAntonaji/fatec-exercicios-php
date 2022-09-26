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

            <input type="number" step="any" id="quilometragem_inicial" name="quilometragem_inicial" placeholder="Quilometragem inicial" class="form-control">
            <input type="number" step="any" id="quilometragem_final" name="quilometragem_final" placeholder="Quilometragem final" class="form-control">
            <input type="number" step="any" id="litros_consumidos" name="litros_consumidos" placeholder="Litros consumidos" class="form-control">
            <input type="number" step="any" id="preco_litro" name="preco_litro" placeholder="Preço por Litro" class="form-control">
            <input type="submit" class="btn btn-primary btn-lg" value="Calcular" style='width: 100%;'>
        </form>
        <?php
        
        if($_POST) {
            $quilometragem_inicial = isset($_POST["quilometragem_inicial"]) ? $_POST["quilometragem_inicial"] : "";
            $quilometragem_final = isset($_POST["quilometragem_final"]) ? $_POST["quilometragem_final"] : "";
            $litros_consumidos = isset($_POST["litros_consumidos"]) ? $_POST["litros_consumidos"] : "";
            $preco_litro = isset($_POST["preco_litro"]) ? $_POST["preco_litro"] : "";
            
            $valor_gasto = number_format($litros_consumidos * $preco_litro, 2);
            $distancia = $quilometragem_final - $quilometragem_inicial;
            echo "<p>Você percorreu uma distancia de $distancia Km, com um custo de R$ $valor_gasto</p>";
        }

        ?>
    </div>
</body>

</html>