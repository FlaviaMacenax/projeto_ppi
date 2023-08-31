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
    <title>Sua compra</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: url(imagens/fundo2.png);
        }
    </style>
</head>
<body>
    <form action="usuario.php" method="post">
    <table>
        <tr>
            <th colspan="2">Dados do Usuário</th>
        </tr>
        <tr>
            <td><i class="fa-solid fa-user"></i>Nome completo:</td>
            <td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td><i class="fa-solid fa-envelope"></i>Email:</td>
            <td><input type="email" name="usuario"></td>
        </tr>
        <tr>
            <td><i class="fa-solid fa-location-dot"></i>Endereço:</td>
            <td><input type="text" name="endereco"></td>
        </tr>

        <tr colspan="2">
            <td colspan="5"><input type="submit" name="logar" value="Logar"></td>
        </tr>
    </table>
    </form>

    <table>
        <tr>
            <th colspan="5">Itens da Compra</th>
        </tr>
        <tr>
            <th>#</th>
            <th>Núm. Item</th>
            <th>Descrição</th>
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
            <td><?php echo $item ['ni']; ?></td>
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
            <th colspan="3"></th>
            <th>Valor Total:</th>
            <th><?php echo $_SESSION['valortotal']; ?></th>

        </tr>
    </table>   

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