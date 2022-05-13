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

    $lista_coisas['frutas'] = ['1' => 'Banana', '2' => 'Maça', '3' => 'Morango', '4' => 'Uva'];
    $lista_coisas['pessoas'] = ['1' => 'Lucas', '2' => 'Breno', '3' => 'Carlos', '4' => 'Caio'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo "<hr/>";


    echo $lista_coisas['frutas'][3] . '<br/>';
    echo $lista_coisas['pessoas'][2] . '<br/><br/><br/><br/><br/>';

    //------------------------------Pesquisando dentro de Array----------------------------

    //in_array()
    //array_search()

    $existe =  in_array('Banana', $lista_coisas['frutas']);
    if ($existe) {
        echo 'Sim, o valor pesquisado existe no array <br/>';
    } else {
        echo 'Não, o valor pesquisado não existe no array <br/><br/><br/>';
    };


    echo array_search('Uva', $lista_coisas['frutas']) . "<br/><br/><br/>";

    //------------------------------Funções nativas de array----------------------------

    $nomes = ['Lucas', 'Carlos', 'Experandio'];
    $name = ['Caio', 'Breno'];
    $total_name = array_merge($nomes, $name);
    $string = '03/05/2022';

    echo '1:  ' . is_array($nomes) . '<br/>'; // verifica se o parâmetro é um array
    echo '2: ' . array_keys($nomes) . '<br/>'; // retorna todas as chaves de um array
    echo '3:  ' . sort($nomes) . '<br/>'; //orderna um array e reajusta seus indices (return treu ~ false)
    echo '4:  ' . asort($nomes) . '<br/>'; //ordena um array  preservando os indices
    echo '5:  ' . count($nomes) . '<br/>'; //conta a quantidade de elemntos de um array

    echo '6:  ' . '<pre>';
    print_r($total_name);
    echo '</pre>' . '<br/>'; //funde um ou mais array's


    $res3 = explode('/',$string); //divide uma string baseada em um delimitador

    echo '7: <pre>';
    print_r($res3);
    echo '</pre>' . '<br/>';


    $res4 = implode(',', $nomes); //junta elementos de um array em uma string

    echo '8: <pre>';
    print_r($res4);
    echo '</pre>' . '<br/>';

    ?>

</body>

</html>