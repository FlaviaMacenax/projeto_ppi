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
    <link rel= "stylesheet" type= "text/css" media="screen" href="main-css.css">
    <title>Usuario</title>
</head>
<body>
    <form action="usuario.php" method="post">
    <table>
        <tr>
            <th colspan="2">Dados do Usuário</th>
        </tr>
        <tr>
            <td>Usuário:</td>
            <td><input type="text" name="usuario"></td>
        </tr>
        <tr>
            <td>Nome completo:</td>
            <td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td>Endereço:</td>
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

</body>
</html>