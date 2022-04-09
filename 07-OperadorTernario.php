<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <!-- <condição> ? true : false -->
    <?php
        $numero = 10;
        $numero2 = 20;

        $condicao = $numero > 25;
    ?>

    <?= $x = 25 ? "Sim <br>" : "Não<br>"; ?>

    <?php

    $teste = $condicao ? 'Sim <br>' : 'Não <br>';
    echo $teste;

    ?>

</body>

</html>