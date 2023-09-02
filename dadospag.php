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
    <link rel= "stylesheet" type= "text/css" media="screen" href="main-css.css">
    <title>Usuario</title>
</head>
<body>
<table>
    <tr>
        <th colspan="2">Dados do Usuário</th>
    </tr>
    <tr>
        <td>Usuário:</td>
        <td><?php echo $usuario; ?></td>
    </tr>
    <tr>
        <td>Nome completo:</td>
        <td><?php echo $nome; ?></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>Telefone:</td>
        <td><?php echo $telefone; ?></td>
    </tr>
    <tr>
        <td>Endereço:</td>
        <td><?php echo $endereco; ?></td>
    </tr>
</table>

<form action="dadospag.php" method="post">

<br>

<table>

    <tr>
        <th colspan = "4">Dados do Pagamento</th>
    </tr>
    <tr>
        <th>#</th>
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

</body>
</html>