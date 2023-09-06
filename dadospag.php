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

        .box{
            display: block;
            margin-top: 50px;
            padding:40px;
            justify-content: center;
            align-items: center;
            margin-left: 215px;
            color:#3D3D3D;
        }

        .img-box{
            background-color: rgba(255, 255, 255, 0.5);
            width: 75%;
            height: 295px;
            align-items: center;
            border-radius: 20px 20px 0 0;
            display: flex;
            justify-content: center;
        }

        .form-box{
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            width: 75%;
            height: 290px;
            border-radius: 0 0 20px 20px;
            padding-left: 220px;
        }

        .form-box h2{
            font-size: 30px;
            color: #BB7C73;
            display: flex;
            align-items: center;
            margin-top: 15px;
            margin-bottom: 25px;
        }

        .info{
            color: #BB7C73;
            background-color: rgba(255, 255, 255, 0.32);
            border-radius: 20px;
            font-family: 'Josefin Sans', sans-serif;
            width: 75%;
            padding-left: 8px;
        }

        table{
            font-size: 18px;
        }

        .icon{
            margin-right: 8px;
        }

        .pag-box{
            background-color: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            border-radius: 12px;
            color:#3D3D3D;
            width: 65%;
            height: 350px;
            display: flex;
            justify-content: center; 
            align-items: center;
            margin-left: 220px;
        }

        .pag-box h2{
            font-size: 30px;
            color: #BB7C73;
            margin-top: 15px;
            margin-bottom: 25px;
            display: flex;
            justify-content: center; 
            align-items: center;
        }

    </style>
</head>
<body>
         <!--Cabeçalho-->
         <header class="container">
            <div class="logo">
               <img src="imagens/logo.png" width="200" height="auto" alt="logo da Isiarah">
            </div> 
        </header>

        <div class="box">
            <div class="img-box">
                <img src="imagens/user.png" width="450px" height="auto" alt="Ícone de cadastro">
            </div>
            <div class="form-box">
                <h2><i class="fa-solid fa-user fa-beat icon"></i>Dados do usuário</h2>
                <table>
                    <tr>
                        <td>Usuário:</td>
                        <td class="info"><?php echo $usuario; ?></td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td class="info"><?php echo $nome; ?></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td class="info"><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td class="info"><?php echo $telefone; ?></td>
                    </tr>
                    <tr>
                        <td>Endereço:</td>
                        <td class="info"><?php echo $endereco; ?></td>
                    </tr>
                </table>
            </div>
        </div>
            
<br>

        <div class="pag-box">
        <form action="dadospag.php" method="post">
        <h2><i class="fa-solid fa-dollar-sign fa-beat icon"></i>Dados do pagamento</h2>
        <table>
            <tr>
                <th>✔</th>
                <th>Métodos de Pagamento</th>
                <th colspan = "2">Dados da Cobrança</th>
            </tr>
            <tr>
                <td><input type = "radio" name = "metpag" value = "deb-avista"></td>
                <td>Débito à Vista</td>
                <td>Número do Cartão</td>
                <td><input type = "text" name = "numcartao-avista"></td>
            </tr>
            <tr>
                <td><input type = "radio" name = "metpag" value = "credito"></td>
                <td>Crédito à Vista</td>
                <td>Número do Cartão</td>
                <td><input type = "text" name = "numcartao-credito"></td>
            </tr>
            <tr>
                <td><input type = "radio" name = "metpag" value = "pix"></td>
                <td>PIX</td>
                <td>Número do Pix</td>
                <td>h93u-28rb-24bd-h38v</td>
            </tr>
            <tr>
                <th colspan="2"></th>
                <th>Valor Total:</th>
                <th><?php echo $valorTotal; ?></th>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" name="pagar" value="Pagar"></td>
            </tr>
        </table>
        </form>
</div>

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