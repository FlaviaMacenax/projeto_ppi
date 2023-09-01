<?php
session_start();
$_SESSION ['usuario'] = "";
/*$i = 0;
foreach($_SESSION['itens'] as $item){
    echo $i .  $item['desc'] . " - " . $item['vl']."<br>";
}*/
if(isset($_POST['logar'])){
    if(isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['endereco'])){
        $_SESSION['usuario'] = array(
                'usuario' => $_POST['usuario'],
                'nome' => $_POST['nome'],
                'endereco' => $_POST['endereco']
        );
        header('Location: dadospag.php', true, 303);
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
    <title>Minha compra</title>
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
            display: flex;
            margin-top: 50px;
            padding:40px;
        }

        .img-box{
            background-color: rgba(255, 255, 255, 0.5);
            width: 50%;
            display: flex;
            align-items: center;
            padding: 20px;
            border-radius: 20px  0 0 20px;
        }

        .img-box img{
            margin-left: 45px;
        }

        .form-box{
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            width: 50%;
            border-radius: 0 20px 20px 0;
        }

        .form-box h2{
            font-size: 30px;
            color: #BB7C73;
        }

        .form-box form{
            margin: 20px 0;
        }

        form .input-group{
            margin-bottom: 15px;
        }

        form .input-group label{
            color: #3D3D3D;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        form .input-group input{
            width: 100%;
            height: 47px;
            background-color: rgba(255, 255, 255, 0.32);
            border-radius: 20px;
            outline: none;
            border: 2px solid transparent;
            padding: 15px;
            font-size: 15px;
            color: #616161;
            transition: all 0.4s ease;
            font-family: 'Josefin Sans', sans-serif;
        }

        form .input-group input:focus{
            border-color: #BB7C73;
        }

        .logar input[type="submit"]{
            width: 100%;
            height: 47px;
            background: #CC8C82;
            border-radius: 20px;
            outline: none;
            border: none;
            margin-top: 15px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            font-family: 'Prata', serif;
            text-transform: uppercase;
            font-weight: bold;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:hover {
            background-color: #ffff; 
            color: #CC8C82;
        }

        .icon{
            margin-right: 10px;
        }

        .compras{
            display: flex;
            justify-content: center;
        }

        .carrinho{
            background-color: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            width: 94%;
            border-radius: 12px;
            color:#3D3D3D;
        }

        .carrinho h2{
            color: #BB7C73;
        }

        table {
            border-spacing: 15px;
        }

        th{
            color: #ffff;
        }

        table, th, td{
            padding: 5px 40px 5px 40px;
        }

        table{
            display: flex;
            justify-content: center;
        }

        td{
            font-family: 'Josefin Sans', sans-serif;
            font-size: 18px;
        }

        .total{
            color: #BF877E;
            font-weight: bold;
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

     <!--Cadastro de usuário-->
    <div class="box">
        <div class="img-box">
            <img src="imagens/compra.png" width="450px" height="auto" alt="Ícone de cadastro">
        </div>
        <div class="form-box">
        <h2><i class="fa-solid fa-user fa-beat icon"></i>Dados do usuário</h2>
            <form action="usuario.php" method="post">
                <div class="input-group">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" placeholder="Digite o seu nome completo" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Digite o seu email" required>
                </div>
                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" placeholder="Digite o seu telefone" required>
                </div>
                <div class="input-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" placeholder="Digite o seu endereço" required>
                </div>
                <div class="logar">
                    <input type="submit" name="logar" value="Logar">
                </div>
            </form>
        </div>
    </div>
    
       <!--Carrinhos de compra-->
       <div class="compras">
        <div class="carrinho">
        <h2 class="compras"><i class="fa-solid fa-cart-shopping fa-beat icon"></i>Carrinho de compras</h2>
        <table class="compras">
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
            <th class="total">Valor Total:</th>
            <th class="total"><?php echo $_SESSION['valortotal']; ?></th>
        </tr>
    </table>   
        </div>
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