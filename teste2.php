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
        $_SESSION['valortotal'] = $valorTotal;

        header('Location: usuario.php', true, 303);
        /*for($i = 0; $i < $ni; $i++){
            echo $i .  $_SESSION['itens'][$i]['desc'] . " - " . $_SESSION['itens'][$i]['vl']."<br>";
        }*/
    }

    //echo 'Valor Total '. $valorTotal;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importação da fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Josefin+Sans:wght@300;400;500;700&family=Prata&display=swap" rel="stylesheet">
    <!--Ícones do footer-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Ícone da barra do navegador-->
    <link rel="icon" type="image/x-icon" href="imagens/flexicon.png">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="isiarah.css">
    <title>Nossos produtos</title>
</head>
<body>
     <!--Cabeçalho-->
     <header class="container">
            <div class="logo">
               <img src="imagens/logo.png" width="200" height="auto" alt="logo da Isiarah">
            </div> 
     </header>

    <form action="compras.php" method="post">
        <table>
            <tr>
                <th colspan="5">Nossos produtos</th>
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
                <td><input type="text" name="desc0" value="Anel Ouro rose" readonly></td>
                <td><input type="number" name="qtd0" value="0"></td>
                <td><input type="text" name="vl0" value="550.00" readonly></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="ch1"></td>
                <td><input type="text" name="desc1" value="Argola de prata com brilhantes" readonly></td>
                <td><input type="number" name="qtd1" value="0"></td>
                <td><input type="text" name="vl1" value="980.00" readonly></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="ch2"></td>
                <td><input type="text" name="desc2" value="Colar Lua e estrelas" readonly></td>
                <td><input type="number" name="qtd2" value="0"></td>
                <td><input type="text" name="vl2" value="920.00" readonly></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="ch3"></td>
                <td><input type="text" name="desc3" value="Anel de brilhantes" readonly></td>
                <td><input type="number" name="qtd3" value="0"></td>
                <td><input type="text" name="vl3" value="430.00" readonly></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="checkbox" name="ch4"></td>
                <td><input type="text" name="desc4" value="Bracelete de pérolas" readonly></td>
                <td><input type="number" name="qtd4" value="0"></td>
                <td><input type="text" name="vl4" value="535.00" readonly></td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type="checkbox" name="ch5"></td>
                <td><input type="text" name="desc5" value="Pingente de coração" readonly></td>
                <td><input type="number" name="qtd5" value="0"></td>
                <td><input type="text" name="vl5" value="200.00" readonly></td>
            </tr>
            <tr>
                <td>7</td>
                <td><input type="checkbox" name="ch6"></td>
                <td><input type="text" name="desc6" value="Bracelete Barras brilhantes" readonly></td>
                <td><input type="number" name="qtd6" value="0"></td>
                <td><input type="text" name="vl6" value="815.00" readonly></td>
            </tr>
            <tr>
                <td>8</td>
                <td><input type="checkbox" name="ch7"></td>
                <td><input type="text" name="desc7" value="Colar de prata Estrela" readonly></td>
                <td><input type="number" name="qtd7" value="0"></td>
                <td><input type="text" name="vl7" value="600.00" readonly></td>
            </tr>
            <tr>
                <td>9</td>
                <td><input type="checkbox" name="ch8"></td>
                <td><input type="text" name="desc8" value="Brinco Esfera de brilhantes" readonly></td>
                <td><input type="number" name="qtd8" value="0"></td>
                <td><input type="text" name="vl8" value="575.00" readonly></td>
            </tr>
            <tr>
                <td>10</td>
                <td><input type="checkbox" name="ch9"></td>
                <td><input type="text" name="desc9" value="Pingente Vagalume" readonly></td>
                <td><input type="number" name="qtd9" value="0"></td>
                <td><input type="text" name="vl9" value="250.00" readonly></td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="comprar" value="Comprar"></td>
            </tr>
        </table>
    </form>

    <!--Rodapé-->
 <footer>
            <div id="footer_content">
                <div id="footer_contacts">
                    <h1><img src="imagens/logo.png"  width="150" height="auto" alt="logo do quiz"></h1>
                    <p class="redes">Siga nossas redes sociais:</p>
 
                    <div id= "footer_social_media">
                        <a href="https://www.instagram.com/" class="footer-link" id="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
 
                        <a href="https://www.youtube.com/" class="footer-link" id="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
 
                        <a href="https://twitter.com/" class="footer-link" id="x">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </div>
                </div>
 
                <ul class="footer-list">
                    <li>
                        <h3>Desenvolvido por</h3>
                    </li>
                    <li>
                        <a href="mailto:flavia.macena@escolar.ifrn.edu.br" class="footer-link" target="blank">Flávia Jamily</a>
                    </li>
                    <li>
                        <a href="mailto:isabel.natalia@escolar.ifrn.edu.br" class="footer-link" target="blank">Isabel Natalia</a>
                    <li>
                        <a href="mailto:lima.sarah@escolar.ifrn.edu.br" class="footer-link" target="blank">Sarah Lima</a>
                    </li>
                </ul>
 
                <ul class="footer-list">
                    <li>
                        <h3>Ficha técnica</h3>
                    </li>
                    <li>
                        <p>Trabalho realizado para a disciplina de programação para internet</p>
                    </li>
                    <li>
                        <p>Professor: Éberton Marinho</p>
                    </li>
                    <li>
                        <p>Unidade 2</p>
                    </li>
                    <li>
                        <p>IFRN- Campus Canguaretama</p>
                    </li>
                </ul>
            </div>
        </footer>

</body>
</html>