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

            <input type="number"  id="qtde_total" name="qtde_total" placeholder="Quantidade de prestações totais" class="form-control">
            <input type="number"  id="qtde_pagas" name="qtde_pagas" placeholder="Quantidade de prestações pagas" class="form-control">
            <input type="number" step="any" id="valor_prestacao" name="valor_prestacao" placeholder="Valor de cada prestação" class="form-control">
           
            <input type="submit" class="btn btn-primary btn-lg" value="Calcular" style='width: 100%;'>
        </form>
        <?php
        
        if($_POST) {
            $qtde_total = $_POST["qtde_total"] ;
            $qtde_pagas = $_POST["qtde_pagas"] ;
            $valor_prestacao = $_POST["valor_prestacao"] ;
            
            $total = $valor_prestacao * $qtde_total;
            $total_pago = $valor_prestacao * $qtde_pagas;

            $total_devedor = $total - $total_pago;

            $restante = $qtde_total - $qtde_pagas;

            echo "Ainda faltam pagar: R$ $total_devedor em $restante parcelas";

        
        }   

        ?>
    </div>
</body>

</html>