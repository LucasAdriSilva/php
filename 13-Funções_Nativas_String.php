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
    /*------------------------------------TEXTO------------------------------------*/ 
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

    /*------------------------------------NUMEROS------------------------------------*/ 
    $num = 3.5;

    echo $num . " = ";
    echo ceil($num).'<br/>'; //Aredonda pra cima

    echo $num . " = ";
    echo floor($num).'<br/>'; //Aredonda pra baixo

    echo $num . " = ";
    echo round($num).'<br/>'; //Aredonda com o valor base nas casas deciamis

    echo "Gera um numero aleatorio = ";
    echo rand().'<br/>';  // Numero aleatorio

    echo $num . " = ";
    echo sqrt($num).'<br/><br/><br/><br/>'; // Raiz quadrada

    /*------------------------------------DATA------------------------------------*/ 
    /*echo date_default_timezone_set('America/Sao_Paulo');

    echo date('d/m/Y  H:i:s')."<br/><br/>";

    echo date_default_timezone_get()."<br/><br/>" ;

    echo date('d/m/Y  H:i:s')."<br/><br/><br/><br/>";*/

    $datainicial = "2018-04-24";
    $datafinal = "2018-05-15";
    
    $timeini = strtotime($datainicial);
    echo $timeini. "<br/>";
    echo gettype($timeini). "<br/>";

    $timefin = strtotime($datafinal);
    
    echo $timefin. "<br/>";
    echo gettype($timefin). "<br/>";

    $res2 = $timeini - $datafinal;
    echo $res2;

   /*strotime(data);*/

    ?>
</body>

</html>