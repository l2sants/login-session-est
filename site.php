<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-session-estudo</title>
    <?php
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header("Location: index.php");
    }
    $logado = $_SESSION['login'];
    ?>
</head>
<body>
    <table style="width: 800px; height: 748px; border-width: 1px;">
        <tr>
            <td style="height:90px; colspan: 1; background-color: #cccc;">
            <?php
            echo "Bem vindo '$logado'";
            ?>
            </td>
        </tr>
        <tr>
            <td style="width: 104px; height: 410px; colspan: 1px; background-color: #cccc;">
                Menu Aqui
            </td>
            <td style="width: 546px;"> CONTEUDO E ICONES AQUI. </td>
        </tr>
        <tr>
            <td style="colspan: 2px; bgcolor:#000000;"> </td>
        </tr>   
    </table>
</body>
</html>