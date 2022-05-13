<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    // String
    $nome = 'Lucas Adriano';
    $sexo = 'Masculino';
    //int
    $idade = 25;    
    $altura = 182;
    //float
    $peso = 91.3;
    //boolean se for true = 1 se não retorna nada
    $fumante_sn = true;  

    //....Lógica...//
    $idade = '56';

    ?>

    <h1>Ficha Cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Sexo: <?= $sexo ?></p>
    <p>Altura: <?= $altura ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>

</html>