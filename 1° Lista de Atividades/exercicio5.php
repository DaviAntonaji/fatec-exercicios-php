
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
       <input class="form-control" type="number" step="any" placeholder="Digite a primeira nota" id="n1" name="n1" required>
       <input class="form-control" type="number" step="any" placeholder="Digite a segunda nota" id="n2" name="n2" required>
       <input class="form-control" type="number" step="any" placeholder="Digite a terceira nota" id="n3" name="n3" required>
       <input class="form-control" type="number" step="any" placeholder="Digite a quarta nota" id="n4" name="n4" required>
 
        <input type="submit" class="btn btn-primary" value="Verificar"> 
        <p>
            <?php
            
            if($_POST) {
                $n1 = isset($_POST['n1']) ? $_POST['n1'] : "";
                $n2 = isset($_POST['n2']) ? $_POST['n2'] : "";
                $n3 = isset($_POST['n3']) ? $_POST['n3'] : "";
                $n4 = isset($_POST['n4']) ? $_POST['n4'] : "";
                $media = ($n1+$n2+$n3+$n4)/4;
                
                if($media >= 7) {
                    echo "Aprovado com media $media";
                }else  {
                    echo "Reprovado com media $media";
                }
               
                
               
            }
            
            ?>
        </p>
        
    </form>
   </div>
</body>
</html>