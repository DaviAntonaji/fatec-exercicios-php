
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        input {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
   <div class="container" style='margin-top:15%;'>
    <form method="post">
        <input class="form-control" type="number" step="any" placeholder="Digite o valor pago" id="valor_pago" name="valor_pago" required>
        <input class="form-control" type="number" step="any" placeholder="Digite o preco do produto" id="preco_produto" name="preco_produto" required>
        <input type="submit" class="btn btn-primary" value="Calcular troco"> 
        <p>
        <?php
            if($_POST) {
                $valor_pago = isset($_POST['valor_pago']) ? $_POST['valor_pago'] : "";
                $preco_produto = isset($_POST['preco_produto']) ? $_POST['preco_produto'] : "";
            
                if($valor_pago && $preco_produto) {
                    $troco = $valor_pago - $preco_produto;
                    if($troco == 0) {
                        echo "Sem troco";
                    }
                    else if($troco > 0) {
                        echo "Troco de: R$ $troco";
                    }else {
                        echo "Faltam R$ " . (-1*$troco);
                    
                    }
                }
            
               
            }
        ?>
        </p>
    </form>
   </div>
</body>
</html>