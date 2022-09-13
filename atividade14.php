
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
        
        <textarea id="texto" name="texto" class="form-control" placeholder="Texto" rows="5"></textarea>
        <input type="text" id="palavra" name="palavra" placeholder="Digite a palavra" class="form-control">

        <input type="submit" class="btn btn-primary btn-lg" value="Verificar classificação" style='width: 100%;'>
</form>

        <?php
        
        if($_POST){ 
            $texto = $_POST["texto"];
            $palavra = $_POST["palavra"];

            $pos = strpos($texto, $palavra);

            if($pos) {
                $pos = $pos+1;
                $final = $pos + strlen($palavra);
                echo "A Palavra $palavra foi encontrada no texto  e está na posição inicial de $pos com final em $final";
            }else {
                echo "Não foi encontrada a palavra $palavra no texto.";
            }

            echo "<br><br> O texto tem ". strlen($texto). " letras";
            echo "<br> O texto tem ". str_word_count($texto). " palavras<br><br>";

            $letras = [];

            foreach(range('a', 'z') as $letra) {
                $aparece = substr_count($texto, $letra);
                if($aparece > 0) {
                    array_push($letras, array("letra" => $letra, "qtde" => $aparece));
                }
            }

            foreach($letras as $letra) {

                echo "A letra ". $letra['letra']." aparece ".$letra["qtde"]. " vezes<br>";
            }



            echo "<br><br>Palavra: $palavra<br> Texto:<br>$texto";

        }
        
        ?>


    </div>
</body>

</html>