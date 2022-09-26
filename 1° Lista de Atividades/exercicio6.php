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

        .selected {
            background-color: lime;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="https://www.programasaudefacil.com.br/images/logo.png" width="30" height="30" alt="">
        </a>
    </nav>
    <div class="container" style='margin-top:2%;'>

        <h2>Cálculo IMC</h2>
        <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.

            O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.

            Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</p>
        <form method="post">
            <input class="form-control" type="number" step="any" placeholder="Digite o seu peso" id="pes" name="pes" required>
            <input class="form-control" type="number" step="any" placeholder="Digite sua altura" id="alt" name="alt" required>

            <input type="submit" class="btn btn-primary" value="Verificar">
            <input type="reset" class="btn btn-danger" value="Limpar">
            <p>
                <?php
                $imc = 0;
                if ($_POST) {
                    $pes = isset($_POST['pes']) ? $_POST['pes'] : "";
                    $alt = isset($_POST['alt']) ? $_POST['alt'] : "";


                    $imc = $pes / ($alt * $alt);

                    echo "Seu IMC e $imc, portanto voce esta categorizado como:";
                }

                ?>
            </p>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">IMC</th>
                        <th scope="col">CLASSIFICAÇÃO</th>
                        <th scope="col">OBESIDADE (GRAU)</th>

                    </tr>
                </thead>
                <tbody>
                  
                    <tr <?php
                        if ($imc > 0 && $imc < 18.5) {
                            echo "class='selected'";
                        }
                        ?>>

                        <td>MENOR QUE 18,5 </td>
                        <td>MAGREZA</td>
                        <td>0</td>
                    </tr>
                    <tr <?php
                        if ($imc >= 18.5 && $imc < 24.9) {
                            echo "class='selected'";
                        }
                        ?>
                        >

                        <td>ENTRE 18,5 E 24,9 </td>
                        <td>NORMAL</td>
                        <td>0</td>
                    </tr>
                    <tr <?php
                        if ($imc >= 24.9 && $imc < 29.9) {
                            echo "class='selected'";
                        }
                        ?>
                        >

                        <td>ENTRE 25,0 E 29,9 </td>
                        <td>SOBREPESO</td>
                        <td>I</td>
                    </tr>
                    <tr <?php
                        if ($imc >= 29.9 && $imc < 39.9) {
                            echo "class='selected'";
                        }
                        ?>
                        >

                        <td>ENTRE 30,0 E 39,9 </td>
                        <td>OBESIDADE</td>
                        <td>I</td>
                    </tr>
                    <tr <?php
                        if ($imc >= 39.9) {
                            echo "class='selected'";
                        }
                        ?>
                        >

                        <td>MAIOR QUE 40,0 </td>
                        <td>OBESIDADE GRAVE </td>
                        <td>III</td>
                    </tr>

                </tbody>
            </table>


        </form>
    </div>
</body>

</html>