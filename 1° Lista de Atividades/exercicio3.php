
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
        <input class="form-control" type="number" step="any" placeholder="Digite um numero" id="numero" name="numero" required>

        <input type="submit" class="btn btn-primary" value="Verificar"> 
        <p>
            <?php
            
            if($_POST) {
                $numero = isset($_POST['numero']) ? $_POST['numero'] : "";
        
                if($numero > 10) {
                    echo "o valor é maior que 10";
                }else if($numero == 10) {
                    echo "O valor é exatamente 10";
                }
                else {
                    echo "o valor é menor que 10";
                }
                
               
            }
            
            ?>
        </p>
        
    </form>
   </div>
</body>
</html>