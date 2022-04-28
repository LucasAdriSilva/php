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
    //------------------------Sequencias Numericos------------------------

    // $lista_frutas = array("Banana","Maça","Motango","Uva","Limão");
    $lista_frutas = ["Banana", "Maça", "Morango", "Uva", "Limão"];
    $lista_frutas[] = "Abacaxi";

    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';

    echo "<hr/>";

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    echo $lista_frutas[3] . "<br/><br/><br/>";

    //------------------------Associativos------------------------

    $lista_fruta = [
        'a' => "Banana",
        'b' => "Maça",
        'c' => "Morango",
        '23' => "Uva",
        'f' => "Limão"
    ];

    $lista_fruta[24] = "Kiwi";

    echo '<pre>';
    var_dump($lista_fruta);
    echo '</pre>';

    echo "<hr/>";

    echo '<pre>';

    print_r($lista_fruta);
    echo '</pre>';
    echo "<br/><br/><br/><br/><br/><br/>";

    //-----------------------------------ARRAY MULTIDIMENCIONAL--------------------------------
    $lista_coisas = [];

    $lista_coisas['frutas'] = ['1' => 'Banana' , '2' => 'Maça', '3' => 'Morango', '4' => 'Uva'];
    $lista_coisas['pessoas'] = ['1' => 'Lucas' , '2' => 'Breno', '3' => 'Carlos', '4' => 'Caio'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo "<hr/>";


    echo $lista_coisas['frutas'][3].'<br/>';
    echo $lista_coisas['pessoas'][2] .'<br/><br/><br/><br/><br/>';

    //------------------------------Pesquisando dentro de Array----------------------------

    //in_array()
    //array_search()

     $existe =  in_array('Banana', $lista_coisas['frutas']);
     if($existe){
         echo 'Sim, o valor pesquisado existe no array <br/>';
     }else{
        echo 'Não, o valor pesquisado não existe no array <br/>';
     };


     echo array_search('Uva', $lista_coisas['frutas'])

    ?>

</body>

</html>