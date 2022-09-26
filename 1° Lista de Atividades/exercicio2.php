
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
        <input class="form-control" type="number" step="any" placeholder="Preco por quilo" id="preco_p_quilo" name="preco_p_quilo" required>
        <input class="form-control" type="number" step="any" placeholder="Quantidade de  quilos" id="qtde_quilos" name="qtde_quilos" required>
        <input type="submit" class="btn btn-primary" value="Calcular valor final"> 
        <p>
            <?php
            
            if($_POST) {
                $preco_p_quilo = isset($_POST['preco_p_quilo']) ? $_POST['preco_p_quilo'] : "";
                $qtde_quilos = isset($_POST['qtde_quilos']) ? $_POST['qtde_quilos'] : "";
            
                if($preco_p_quilo && $qtde_quilos) {
                    $total = $preco_p_quilo * $qtde_quilos;
                    echo "O valor final e de: R$ $total";
                    
                }
            
               
            }
            
            ?>
        </p>
        
    </form>
   </div>
</body>
</html>