<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3° Lista de Atividades - Davi de Melo Antonaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        input,select {
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <form method="post">

            <input type="number" step="any" name="valor" id="valor" class="form-control" placeholder="Valor do investimento" required>
            <select id="tipo" name="tipo" class="form-control" placeholder="Tipo do investmentimento" required>
                <option value="1">Poupança</option>
                <option value="2">Fundos de renda fixa</option>
            </select>

            <input type="submit" value="Calcular" class="btn btn-primary btn-lg">

        </form>

        <?php

        if ($_POST) {
            $valor = $_POST['valor'];
            $tipo = $_POST['tipo'];

            switch ($tipo) {
                case "1":
                    $valor_ao_mes = $valor * 3 / 100;
                    $porcentagem = 3;
                    break;
                case "2":
                    $valor_ao_mes = $valor * 4 / 100;
                    $porcentagem = 4;
                }
                $valor_ao_mes = number_format($valor_ao_mes,2,",",".");

                echo "<p>Com esse tipo de investimento será gerado R$ $valor_ao_mes ao mês ($porcentagem % a.m.)</p>";

        }


        ?>
    </div>


</body>

</html>