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
    $nome = 'Lucas';
    $idade = 69;
    $peso = 69;

    if($idade >= 16 && $idade <= 69 && $peso >= 50){
        echo 'Atende aos requisistos';
    } else{
        echo 'Não atende aos requisistos';

    }

    ?>
</body>
</html>