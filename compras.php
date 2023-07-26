<?php
session_start();

$ni= 0;
$_SESSION['itens'] = array();
$_SESSION['valortotal'] = 0.0;
$valorTotal = 0.0;

if(isset($_POST['comprar'])){
for($i = 0; $i < 10; $i++){
    if(isset($_POST['ch'.$i])){
        $c = $ni;
        $desc = $_POST['desc'.$i];
        $qtd = $_POST['qtd'.$i];
        $vl = $_POST['vl'.$i];

        $valorTotal += ($vl * $qtd);

        //echo $i . " [X] " . $desc . "<br>";
        $_SESSION['itens'] = array_merge($_SESSION['itens'], 
                                    array( $c => array(
                                        'ni' => $i,
                                        'desc' => $desc,
                                        'qtd' => $qtd,
                                        'vl' => $vl
                                    ) ) );
        
        $ni +=1;
        } 
    }

    if($ni >0){
        for($i = 0; $i < $ni; $i++){
            echo $i .  $_SESSION['itens'][$i]['desc'] . " - " . $_SESSION['itens'][$i]['vl']."<br>";
        }
    }

    echo 'Valor Total '. $valorTotal;
    $_SESSION['valortotal'] = $valorTotal;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" media="screen" href="main-css.css">
    <title>Compras</title>
</head>
<body>
    <form action="compras.php" method="post">
        <table>
            <tr>
                <th colspan="5">Lista de Compras</th>
            </tr>
            <tr>
                <th>#</th>
                <th>[X]</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="checkbox" name="ch0"></td>
                <td><input type="text" name="desc0" value="Pulseira ametista" readonly></td>
                <td><input type="number" name="qtd0" value="0"></td>
                <td><input type="text" name="vl0" value="400.00" readonly></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="ch1"></td>
                <td><input type="text" name="desc1" value="Colar de ouro" readonly></td>
                <td><input type="number" name="qtd1" value="0"></td>
                <td><input type="text" name="vl1" value="600.00" readonly></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="ch2"></td>
                <td><input type="text" name="desc2" value="Bracelete de Prata" readonly></td>
                <td><input type="number" name="qtd2" value="0"></td>
                <td><input type="text" name="vl2" value="200.00" readonly></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="ch3"></td>
                <td><input type="text" name="desc3" value="Anel de Esmeralda" readonly></td>
                <td><input type="number" name="qtd3" value="0"></td>
                <td><input type="text" name="vl3" value="700.00" readonly></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="checkbox" name="ch4"></td>
                <td><input type="text" name="desc4" value="Brinco de Bronze" readonly></td>
                <td><input type="number" name="qtd4" value="0"></td>
                <td><input type="text" name="vl4" value="100.00" readonly></td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type="checkbox" name="ch5"></td>
                <td><input type="text" name="desc5" value="Anel de Diamante" readonly></td>
                <td><input type="number" name="qtd5" value="0"></td>
                <td><input type="text" name="vl5" value="1000.00" readonly></td>
            </tr>
            <tr>
                <td>7</td>
                <td><input type="checkbox" name="ch6"></td>
                <td><input type="text" name="desc6" value="Pulseira de Pérolas" readonly></td>
                <td><input type="number" name="qtd6" value="0"></td>
                <td><input type="text" name="vl6" value="500.00" readonly></td>
            </tr>
            <tr>
                <td>8</td>
                <td><input type="checkbox" name="ch7"></td>
                <td><input type="text" name="desc7" value="Colar Folheado a ouro - Infantil" readonly></td>
                <td><input type="number" name="qtd7" value="0"></td>
                <td><input type="text" name="vl7" value="300.00" readonly></td>
            </tr>
            <tr>
                <td>9</td>
                <td><input type="checkbox" name="ch8"></td>
                <td><input type="text" name="desc8" value="Gargantilha de Prata de Coração" readonly></td>
                <td><input type="number" name="qtd8" value="0"></td>
                <td><input type="text" name="vl8" value="200.00" readonly></td>
            </tr>
            <tr>
                <td>10</td>
                <td><input type="checkbox" name="ch9"></td>
                <td><input type="text" name="desc9" value="Conjunto de Colar e Brinco de Safira" readonly></td>
                <td><input type="number" name="qtd9" value="0"></td>
                <td><input type="text" name="vl9" value="800.00" readonly></td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="comprar" value="Comprar"></td>
            </tr>
        </table>
    </form>
</body>
</html>