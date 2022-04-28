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
    $texto = 'lucas';
     
    echo $texto. " = ";
    echo strtolower($texto)."<br/> <br/>";// Tudo maiusculo

    echo $texto. " = ";
    echo strtoupper($texto)."<br/> <br/>"; // Tudo minusculo

    echo $texto. " = ";
    echo ucfirst($texto)."<br/> <br/>"; //Primeira maiusculo

    echo $texto. " = ";
    echo strlen($texto)."<br/> <br/>"; // COntagem de caracter

    echo $texto. " = ";
    echo str_replace('uc', 'cu',$texto)."<br/>  <br/>"; // Substituição

    echo $texto. " = ";
    echo substr($texto,2, 4)."<br/> <br/>"; // Captura de um certo trecho


    ?>
</body>

</html>