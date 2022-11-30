<?php
require_once("./controller/cliente.php");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> PROVA PHP</title>
</head>
<body>
    <?php
    if (isset($_POST["CNPJ"])){
        cadFornecedor($_POST);
    }

    ?>
    
    <form action="./?p=cad" method="post">
        <label for="CNPJ">CNPJ: </label>
        <input type="text" name="CNPJ"><br>

        <label for="razaoSocial">Razão Social: </label>
        <input type="text" name="razaoSocial"><br>

        <label for="nomeFantasia">Nome Fantasia: </label>
        <input type="text" name="nomeFantasia"><br>

        <label for="responsavel">Responsável: </label>
        <input type="text" name="responsavel"><br>

        <label for="email">E-Mail: </label>
        <input type="text" name="email"><br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone"><br>

        <input type="submit">
    </form>

</body>
</html>