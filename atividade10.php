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
      <?php
      $n = 25;
      $ultimo=1;
      $penultimo=0;
      $atual = 0;
      for($i=1 ; $i<=$n-2 ; $i++){
        $atual = $ultimo + $penultimo;
        echo $atual."<br>";
        $penultimo = $ultimo;
        $ultimo = $atual;
      }
      
      ?>
    </div>
</body>

</html>