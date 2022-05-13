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
    $var1 = 13;
    $var2 = 4; 

    echo "A soma netre $var1 e $var2 é: ". ($var1+$var2). "<br/>";
    echo "A subtração netre $var1 e $var2 é: ". ($var1-$var2). "<br/>";
    echo "A multiplicação netre $var1 e $var2 é: ". ($var1*$var2). "<br/>";
    echo "A divisão netre $var1 e $var2 é: ". ($var1/$var2). "<br/>";
    echo "O módulo netre $var1 e $var2 é: ". ($var1%$var2). "<br/> <br/>" ;

    /*Operações Aritméticas Atribuição de valores*/ 

    $x = 10;
    /* $x = $x + 5; */
    $x += 5;
    echo $x. "<br/>";

    $x++;
    echo $x. "<br/>";
    ++$x;
    echo $x."<br/>";

    

    ?>
</body>

</html>