<!DOCTYPE HTML>
<?php
    session_start()
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PROVA PHP</title>
</head>
<body>
<?= "O usuário ".$_SESSION["usuario"] = "Bernardo"." está logado | " ?>
<a href="./?p=logout.php">Logout</a>
<hr>
<?php

    require_once("./menu.php");
    isset($_GET["p"])? $page = $_GET["p"] : $page = "home";
    switch($page){
        case "home":
            require_once("./view/listarCliente.php");
        break;
        case "cad":
            require_once("./view/cadCliente.php");
        break;
        case "alt":
            require_once("./view/alterarCliente.php");
        break;
        case "del":
            require_once("./view/deletarCliente.php");
        break;
    }
?>
</body>
</html>