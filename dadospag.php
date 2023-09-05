<?php
session_start();

$_SESSION['dadospag'] = "";

$usuario = (isset($_SESSION['usuario']['usuario'])? $_SESSION['usuario']['usuario']: "");
$nome = (isset($_SESSION['usuario']['nome'])? $_SESSION['usuario']['nome']: "");
$email = (isset($_SESSION['usuario']['email'])? $_SESSION['usuario']['email']: "");
$telefone = (isset($_SESSION['usuario']['telefone'])? $_SESSION['usuario']['telefone']: "");
$endereco = (isset($_SESSION['usuario']['endereco'])? $_SESSION['usuario']['endereco']: "");
$valorTotal = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");

if(isset($_POST['pagar'])) {
    if(isset($_POST['metpag'])) {
        $metpag = $_POST['metpag'];
        $numcartao_avista = (isset($_POST['numcartao-avista']) ? $_POST['numcartao-avista'] : "");
        $numcartao_credito = (isset($_POST['numcartao-credito']) ? $_POST['numcartao-credito'] : "");
    
        $_SESSION['dadospag1'] = array('metpag' => $metpag,
                                        'numcartao-avista' => $numcartao_avista,
                                        'numcartao-credito' => $numcartao_credito);

        header('Location: resumocompra.php', true, 303);
    }
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
    <title>Pagamento</title>
    <style>
         body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url(imagens/fundo2.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <h2><i class="fa-solid fa-user fa-beat icon"></i>Dados do usuário</h2>
        <p>Usuário: <?php echo $usuario; ?></p>
        <p>Nome completo: <?php echo $nome; ?></p>
        <p>E-mail: <?php echo $email; ?></p>
        <p>Telefone: <?php echo $telefone; ?></p>
        <p>Endereço: <?php echo $endereco; ?></p>
      
<br>
        <form action="dadospag.php" method="post">
        <h2><i class="fa-solid fa-dollar-sign fa-beat"></i>Dados do Pagamento</h2>
    
        <p>#</p>
        <p>Métodos de Pagamento</p>
        <p>Dados da Cobrança</p>

        <input type = "radio" name = "metpag" value = "deb-avista">
        <p>Débito à Vista</p>
        <p>Número do Cartão</p>
        <input type = "text" name = "numcartao-avista">

        <input type = "radio" name = "metpag" value = "credito">
        <p>Crédito à Vista</p>
        <p>Número do Cartão</p>
        <input type = "text" name = "numcartao-credito">

        <input type = "radio" name = "metpag" value = "pix">
        <p>PIX</p>
        <p>Número do Pix</p>
        <p>h93u-28rb-24bd-h38v</p>

        <p>Valor Total:</p>
        <p><?php echo $valorTotal; ?></p>

       <input type="submit" name="pagar" value="Pagar">

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