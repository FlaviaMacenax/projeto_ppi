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

<!-- Seção com cards -->
<section class="secao4" id="sobre">
    <form action="teste2.php" method="post">
    <div class="secao4-div">
        <div class="secao4-div-1">
            <div class="secao4-div-1-coluna">
                <img src="imagens/anel brilhantes.png" alt="Anel de brilhantes">
                <div class="custom-checkbox">
                    <input id="checkbox-0" type="checkbox" name="ch0">
                    <label for="checkbox-0"></label></div>
                <input type="text" name="desc0" value="Anel de brilhantes" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd0" value="0">
                <p>Preço:</p>
                <input type="text" name="vl0" value="430.00" readonly>
            </div>
        </div>

        <div class="secao4-div-2">
            <div class="secao4-div-2-coluna">
                <img src="imagens\bracelete de pérolas.png"  width="250px" alt="Bracelete de pérolas">
                <div class="custom-checkbox">
                    <input id="checkbox-1" type="checkbox" name="ch1">
                    <label for="checkbox-1"></label></div>
                <input type="text" name="desc1" value="Bracelete de pérolas" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd1" value="0">
                <p>Preço:</p>
                <input type="text" name="vl1" value="535.00" readonly>
            </div>
        </div>

        <div class="secao4-div-3">
            <div class="secao4-div-3-coluna">
                <img src="imagens/pingente de coração.png" width="250px" alt="Pingente de coração">
                <div class="custom-checkbox">
                    <input id="checkbox-2" type="checkbox" name="ch2">
                    <label for="checkbox-2"></label></div>
                <input type="text" name="desc2" value="Pingente de coração" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd2" value="0">
                <p>Preço:</p>
                <input type="text" name="vl2" value="200.00" readonly>
            </div>
        </div>
    </div>

    <div class="secao4-div">
        <div class="secao4-div-1">
            <div class="secao4-div-1-coluna">
                <img src="imagens\argola de prata.png"  width="250px" alt="Argola de prata com brilhantes">
                <div class="custom-checkbox">
                    <input id="checkbox-3" type="checkbox" name="ch3">
                    <label for="checkbox-3"></label></div>
                <input type="text" name="desc3" value="Argola com brilhantes" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd3" value="0">
                <p>Preço:</p>
                <input type="text" name="vl3" value="980.00" readonly>
            </div>
        </div>

        <div class="secao4-div-2">
            <div class="secao4-div-2-coluna">
                <img src="imagens/anel ouro rose.png" width="250px" alt="Anel de ouro rose">
                <div class="custom-checkbox">
                    <input id="checkbox-4" type="checkbox" name="ch4">
                    <label for="checkbox-4"></label></div>
                <input type="text" name="desc4" value="Anel de ouro rose" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd4" value="0">
                <p>Preço:</p>
                <input type="text" name="vl4" value="550.00" readonly>
            </div>
        </div>

        <div class="secao4-div-3">
            <div class="secao4-div-3-coluna">
                <img src="imagens/colar lua e estrelas.png" width="250" alt="Colar Lua e estrelas">
                <div class="custom-checkbox">
                    <input id="checkbox-5" type="checkbox" name="ch5">
                    <label for="checkbox-5"></label></div>
                <input type="text" name="desc5" value="Colar Lua e estrelas" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd5" value="0">
                <p>Preço:</p>
                <input type="text" name="vl5" value="920.00" readonly>
            </div>
        </div>
    </div>

    <div class="secao4-div">
        <div class="secao4-div-1">
            <div class="secao4-div-1-coluna">
                <img src="imagens/bracelete barras brilhantes.png" width="250" alt="Bracelete de barras brilhantes">
                <div class="custom-checkbox">
                    <input id="checkbox-6" type="checkbox" name="ch6">
                    <label for="checkbox-6"></label></div>
                <td><input type="text" name="desc6" value="Bracelete de brilhantes" readonly>
                <p>Quantidade:</p>
                <td><input type="number" name="qtd6" value="0">
                <p>Preço:</p>
                <td><input type="text" name="vl6" value="815.00" readonly>
            </div>
        </div>

        <div class="secao4-div-2">
            <div class="secao4-div-2-coluna">
                <img src="imagens\colar prata estrela.png"  width="250px" alt="Colar de prata Estrela ">
                <div class="custom-checkbox">
                    <input id="checkbox-7" type="checkbox" name="ch7">
                    <label for="checkbox-7"></label></div>
                <input type="text" name="desc7" value="Colar de estrela" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd7" value="0">
                <p>Preço:</p>
                <input type="text" name="vl7" value="980.00" readonly>
            </div>
        </div>

        <div class="secao4-div-3">
            <div class="secao4-div-3-coluna">
                <img src="imagens/brinco esfera brilhante.png" width="250" alt="Brinco de esfera com brilhantes">
                <div class="custom-checkbox">
                    <input id="checkbox-8" type="checkbox" name="ch8">
                    <label for="checkbox-8"></label></div>
                <input type="text" name="desc8" value="Brinco de esfera" readonly>
                <p>Quantidade:</p>
                <input type="number" name="qtd8" value="0">
                <p>Preço:</p>
                <input type="text" name="vl8" value="920.00" readonly>
            </div>
        </div>
    </div>
    <input type="submit" name="comprar" value="Comprar" class="comprar">
    </form>
</section>

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