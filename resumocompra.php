<?php
session_start();

$_SESSION['dadospag'] = "";

$usuario = (isset($_SESSION['usuario']['usuario'])? $_SESSION['usuario']['usuario']: "");
$nome = (isset($_SESSION['usuario']['nome'])? $_SESSION['usuario']['nome']: "");
$email = (isset($_SESSION['usuario']['email'])? $_SESSION['usuario']['email']: "");
$telefone = (isset($_SESSION['usuario']['telefone']) ? $_SESSION['usuario']['telefone']: "");
$endereco = (isset($_SESSION['usuario']['endereco'])? $_SESSION['usuario']['endereco']: "");
$valorTotal = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");
$metpag = (isset($_SESSION['dadospag1']['metpag'])? $_SESSION['dadospag1']['metpag']: "");
$numcartao_avista = (isset($_SESSION['dadospag1']['numcartao-avista'])? $_SESSION['dadospag1']['numcartao-avista']: "");
$numcartao_credito = (isset($_SESSION['dadospag1']['numcartao-credito'])? $_SESSION['dadospag1']['numcartao-credito']: "");

if(isset($_POST['confirmar'])) {
    header('Location: confirmacaocompra.php', true, 303);
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
    <title>Resumo da Compra</title>
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
            margin-left: 160px;
            color:#3D3D3D;
        }

        .form-box{
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            width: 85%;
            height: 475px;
            border-radius: 20px 20px 20px 20px;
            padding-left: 255px;
            padding-top: 85px;
        }

        .form-box  table {
            border-collapse: separate;
            border-spacing: 15px; 
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

        .icon{
            margin-right: 8px;
        }

        .compras{
            display: flex;
            justify-content: center;
        }

        .carrinho{
            background-color: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            width: 70%;
            height: 450px;
            border-radius: 20px;
            color:#3D3D3D;
        }

        .carrinho h2{
            color: #BB7C73;
            font-size: 30px;
            padding-top: 15px;
        }

        .compras table {
            border-spacing: 15px;
        }

        .compras th{
            color: #ffff;
        }

        .compras table, .compras th, .compras td{
            padding: 5px 40px 5px 40px;
        }

        .compras table, .pag-box table{
            display: flex;
            justify-content: center;
        }

        .compras td{
            font-family: 'Josefin Sans', sans-serif;
            font-size: 18px;
        }

        .total{
            color: #BF877E;
            font-weight: bold;
        }

        .pag-box{
            background-color: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            border-radius: 20px;
            color:#3D3D3D;
            width: 70%;
            height: 375px;
            display: block;
            margin-left: 190px;
            margin-top: 50px;
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

        .pag-box table{
            padding-top: 15px;
            border-collapse: separate; 
            border-spacing: 15px;
        }

        .pag-box th{
            color: #ffff;
        }

        .pag-box td{
            font-family: 'Josefin Sans', sans-serif;
        }

        .confirmar{
            font-size: 20px;
            margin-top: 75px;
            padding-bottom: 25px;
            display: flex;
            justify-content: center; 
            align-items: center;
        }

        .confirmar input[type="submit"]{
            margin-left: 30px;
            width: 25%;
            height: 47px;
            border-radius: 20px;
            outline: none;
            border: none;
            margin-top: 15px;
            cursor: pointer;
            font-size: 16px;
            font-family: 'Prata', serif;
            text-transform: uppercase;
            font-weight: bold;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            background-color: #ffff; 
            color: #CC8C82;
        }

        .confirmar input[type="submit"]:hover {
            background-color: #BF786D; 
            color: #ffff;
        }
    </style>
</head>
<body>

        <!--Cabeçalho-->
        <header class="container">
            <div class="logo">
               <img src="imagens/logo.png" width="200px" height="auto" alt="logo da Isiarah">
            </div> 
        </header>

        <!--Dados do usuário-->
        <div class="box">
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

         <!--Itens da compra-->
       <div class="compras">
        <div class="carrinho">
        <table class="compras">
            <h2 class="compras"><i class="fa-solid fa-bag-shopping fa-beat icon"></i>Itens da compra</h2>
        <tr>
        </tr>
        <tr>
            <th>#</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
        <?php
        $i = 0;
        if(isset($_SESSION['itens'])){
            foreach($_SESSION['itens'] as $item){
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $item ['desc']; ?></td>
            <td><?php echo $item ['qtd']; ?></td>
            <td><?php echo $item ['vl']; ?></td>
        </tr>
        <?php
            $i++;
           }
        }
        ?>
        
        <tr>
            <td></td>
            <td></td>
            <th><div class="total">Valor Total: </div></th>
            <th><div class="total"><?php echo $_SESSION['valortotal']; ?></div></th>
        </tr>
    </table>   
        </div>
    </div>
    <br>

     <!--Informações de pagamento-->
    <div class="pag-box">
        <h2><i class="fa-solid fa-dollar-sign fa-beat icon"></i>Dados do pagamento</h2>
    <table>
    <tr>
        <th>Método de Pagamento</th>
        <th colspan = "2">Dados da Cobrança</th>
    </tr>
    <tr>
        <td>
            <?php
                if($metpag == "deb-avista"){
                    echo "Débito à Vista";
                }else if ($metpag == "credito"){
                    echo "Crédito à Vista";
                }else if ($metpag == "pix"){
                    echo "PIX";
                }
            ?>
        </td>
        <td>Número do Cartão: </td>
        <td>
        <?php
                if($metpag == "deb-avista"){
                    echo $numcartao_avista;
                }else if ($metpag == "credito"){
                    echo $numcartao_credito;
                }
            ?>
        </td>
    </tr>
    </table>
    </div>

    <form action="resumocompra.php" method="post">
        <div class="confirmar">
            <h3>Deseja confirmar sua compra ?</h3> 
            <input type="submit" name="confirmar" value="Confirmar"></div>
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