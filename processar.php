<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <h1>Oficina da Juju</h1>
    <h2>Pedidos</h2>
    <?php

    // criação de nomes de variáveis curtas.
    // ENTRADA

    $pneu = $_POST['pneu'];
    $oleo = $_POST['oleo'];
    $vela = $_POST['vela'];
    $achar = $_POST['achar'];
    $valortotal = 0.00;
    $qtdtotal = 0;

    define('PRECOPNEU', 100);
    define('PRECOOLEO', 10);
    define('PRECOVELA', 4);

    $valortotal = $pneu * PRECOPNEU
                 + $oleo * PRECOOLEO
                 + $vela * PRECOVELA;

    $qtdtotal = $pneu + $oleo + $vela;

    if ($qtdtotal == 0) {
        echo 'Você não solicitou o nada na página anterior <br>' ;
    } else {  echo $pneu.' pneus <br>'.$oleo.' galões <br>'.$vela.' velas <br>';

    }

    // echo = escreva no portugol.
    // o ponto substitui o echo para ficar na mesma linha.

    echo '<p> Pedido Processado às: '.date('H:i, d/m/y.').'</p>';
    
    // retorno das variáveis

    

    // calculando o valor total das quantidades
    
    echo 'A quantidade total é: ' .$qtdtotal .'<br>'; 
    echo 'Subtotal: R$ ' .number_format($valortotal,2,',','.').'<br>';

    $taxa = 0.22; //lucro presumido

    $valortotal = $valortotal * (1 + $taxa);

    if ($pneu < 10) { 
        $desconto = 0;
        } elseif (($pneu >= 10) && ($pneu <= 49)) {
            $desconto = 0.05;
        } elseif (($pneu >= 50) && ($pneu <= 99)) {
            $desconto = 0.10;
        } elseif ($pneu >= 10) {
            $desconto = 0.15;
        }

    echo ' O valor total com imposto é: R$ '.number_format($valortotal,2,',','.'). '<br>';
    $valortotal = $valortotal * (1 - $desconto);
    echo ' O valor total  com desconto é: R$ '.number_format($valortotal,2,',','.'). '<br>';

    switch ($achar) {
        case 'a':
            echo '<p>Cliente Regular</p>';
            break;
        case 'b':
            echo '<p>Anuncio de TV</p>';
            break;
        case 'c':
            echo '<p>Telefone</p>';
            break;
        case 'd':
            echo '<p>Boca a boca</p>';
            break;         
        default:
            echo '<p>Não encontrado</p>';
            break;
    }

    ?>

</body>
</html>