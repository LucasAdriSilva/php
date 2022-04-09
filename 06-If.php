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
    /* 
        == igual
        === identico
        != diferente
        <> diferente
        !== não identico
        < Menor
        > Maior
        <= Menor Igual
        >= Maior Igual
        AND ou && todas verdadeiras 
        OR ou || pelo menos uma for verdadeira
        XOR  verdadeiro apenas se uma das expressoões for verdadeira, mas não ambos
        ! inverte o resultado
 
      */

    // if (!(4 <> 4)) {
    //     echo  'verdadeiro';
    //     echo  '1';
    // }
    // if (4 <> 5 xor 5 == 9) {
    //     echo  'verdadeiro';
    //     echo  '2';
    // }
    // if (4 == 4 and 3 == 4) {
    //     echo  'verdadeiro';
    //     echo  '3';
    // }
    // if (4 == 4 or 3 == 4) {
    //     echo  'verdadeiro';
    //     echo  '4';
    // }

    // $usuario_cartao = true;
    // $valor = 250;
    // $valor_frete = 50;
    // $recebeu_desconto = false;

    // if ($usuario_cartao == true and $valor >= 100) {
    //     $valor_frete = 0;
    //     $recebeu_desconto = true;
    //     echo "<br/> Valor da compra tera desconto no frete e sera = $valor_frete";
    // }

    // ?>

    <h3>Informações de pedido</h3>

    <?php
    // if ($recebeu_desconto == true) {
    //     echo "Seu pedido já está com desconto";
    // }

    // ?>
    <!--Encadeado-->

    <?php
    $usuario_cartao = true;
    $valor = 250;
    $valor_frete = 50;
    $recebeu_desconto = false;

    if ($usuario_cartao == true and $valor <> 500) {
        $valor_frete = 0;
        $recebeu_desconto = true;
        echo "<br/> Valor da compra tera desconto no frete e sera = $valor_frete";
    } else if($valor = 500){
        echo "<br/>Carai borracha você gastou= $valor kkkk";
    }

    ?>

</body>

</html>