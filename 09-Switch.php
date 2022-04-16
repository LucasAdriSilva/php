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
    $Nome = "Lucas";

    switch($Nome = "Lucas"){
        case true:
        echo 'Nome é Lucas';
        break;
        case false:
        echo 'O nome não é Lucas';
        break;

        default:
        //
        break;
    }

    ?>
</body>
</html>