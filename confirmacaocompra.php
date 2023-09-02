
<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" media="screen" href="isiarah.css">
    <script src="https://kit.fontawesome.com/69594d6708.js" crossorigin="anonymous"></script>
    <title>Confirmação Compra</title>

    <style>
        .logo{
            margin-bottom: 40px;
        }
        .geral{
            border: 1px solid #0000;
            border-radius: 15px;
            width: 40%;
            margin-left: 500px;
            background-color: #EDD6C9;
            align-items: center;
            box-shadow: 10px 5px 5px #573731;
        }
        .geral:hover{
            background-color: #F4E8E5;
        }
        .confirma{;
            border-radius: 15px;
            justify-content: center;
            display: flex;
        }
        .mensagem{
            margin-top: 50px;
            margin-left: 170px;
        }
        .confirmacao{
            background-color: #a74c3e;
            margin-top: 30px;
            margin-left : 170px;
            padding: 20px 30px;
            width: 50%;
            border-radius: 15px;
            color:#CFE0BC;
            box-shadow: 5px 5px 2px #B26150;
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
        }
        .icon{
            margin-right: 35px;
            width: 5px;
            color: #CFE0BC;
        }
        h2{
            color: #a74c3e;
            font-size: 30px;

        }
        h1{
            font-size: 20px;
        }
        h4{
            font-size: 15px; 
            color: #a74c3e;
            margin-top: 5px;
        }
        h5{
            color: #B26150;
            margin-top: 5px;
            text-align: left;
            width: 80%;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
<header class="container">
            <div class="logo">
               <img src="imagens/logo.png" width="200" height="auto" alt="logo da Isiarah">
            </div> 
     </header>
     <div class="geral">
    <div class="confirma">
        <div class="mensagem">
        <h2>Pedido Confirmado <i class="fa-solid fa-heart fa-flip"></i></h2>
            <h4>Seu pedido foi realizado com sucesso.</h4>
            <h5>Em breve, você receberá um e-mail no endereço indicado com todos os detalhes do pedido.</h5>
            <h4>A Isiarah agradece sua preferência.</h4>
        </div>
    </div>
        <div class="confirmacao">
            <h1 class = "confirma"><i <i class="fa-regular fa-circle-check fa icon"></i>Pagamento Aprovado.</h1>
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