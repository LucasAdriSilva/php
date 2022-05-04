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
    /*******************WHILE*******************/
    $num = 0;
    echo 'Iniciando loop <br/>';
    while ($num < 20) {

        $num += 2;

        if ($num == 2 || $num == 5) {
            continue;
        };

        echo "$num <br/>";

        if ($num > 100) {
            break;
        };
    };
    echo 'Fim do loop <br/><br/><br/>';

    /*******************DO-WHILE*******************/
    echo 'Iniciando 2loop <br/>';
    $x = 10;
    //Break - Interrompe o loop
    //Continue - avança a logica para a proxiam condição
    do {
        echo 'Entrou no Do-While';
    } while ($x < 9);

    echo 'Fim do 2loop <br/><br/><br/>';


    /*******************FOR*******************/
    echo 'Iniciando 3loop <br/>';
    //Break - Interrompe o loop
    //Continue - avança a logica para a proxiam condição

    for ($y = 1; $y < 10/*true-parando o loop com o brak ('try')*/; $y++) {
        echo "$y weeee <br/>";
    };

    echo 'Fim do 3loop <br/><br/><br/>';



    /*******************FOREACH*******************/
    echo 'Iniciando 4loop <br/>';
    $nomes = ['Lucas', 'Carlos', 'Rafaela'];

    echo '<pre>';
    print_r($nomes);
    echo '<pre/>';

    foreach ($nomes as $itens) {
        echo "$itens <br/>";

        if ($itens == 'Lucas') {
            echo "My name is $itens";
        }
    };

    echo 'Fim do 4loop <br/><br/><br/>';
    /***********************************************************************/
    echo 'Iniciando 5loop <br/>';

    $funcionarios = array(
        array('nome' => 'João', 'salario' => 2500),
        array('nome' => 'Maria', 'salario' => 1200),
        array('nome' => 'Rodolpho', 'salario' => 4500),

    );

    foreach ($funcionarios as $id => $funcionarios) {
        foreach($funcionarios as $id2 => $valor){
            echo "$id2 - $valor <br/>";
        };
        echo "<hr/>";
    };

    echo 'Fim do 5loop <br/><br/><br/>';






    ?>

</body>

</html>