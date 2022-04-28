<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    //gettype
    $valor = 10.35;
    $valor2= (float) $valor; // float, double, real 
    $valor3= (string) $valor;
    $valor4= (int) $valor;
    $valor5= (boolean) $valor;


    echo $valor.' '.gettype($valor);
    echo '<br/>';
    echo $valor2.' '.gettype($valor2);
    echo '<br/>';
    echo $valor3.' '.gettype($valor3);
    echo '<br/>';
    echo $valor4.' '.gettype($valor4);
    echo '<br/>';
    echo $valor5.' '.gettype($valor5);


    ?>
</body>

</html>