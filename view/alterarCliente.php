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
    if (isset($_GET["altera"])){
        $fornecedor = buscaFornecedor($_GET["altera"]);

        $CNPJ = $fornecedor["CNPJ"];
        $razaoSocial = $fornecedor["razaoSocial"];
        $nomeFantasia = $fornecedor["nomeFantasia"];
        $responsavel = $fornecedor["responsavel"];
        $email = $fornecedor["email"];
        $telefone = $fornecedor["telefone"];
    }

    if (isset($_GET["alt"])){
        try{
            altFornecedorDAO($_POST);
            header("Location:index.php");
        }catch(Exception $e){
            echo "Erro: ". $e->getMessage();
        }
    }

    ?>

    <form action="<?= isset($CNPJ)? "./?p=alt&alt=$CNPJ" : "" ?>" method="post">
        <label for="CNPJ">CNPJ: </label>
        <input type="text" name="CNPJ" value="<?= isset($CNPJ)? $CNPJ: "" ?>"><br>

        <label for="razaoSocial">Razão Social: </label>
        <input type="text" name="razaoSocial" value="<?= isset($CNPJ)? $razaoSocial: "" ?>"><br>

        <label for="nomeFantasia">Nome Fantasia: </label>
        <input type="text" name="nomeFantasia" value="<?= isset($CNPJ)? $nomeFantasia: "" ?>"><br>

        <label for="responsavel">Responsável: </label>
        <input type="text" name="responsavel" value="<?= isset($CNPJ)? $responsavel: "" ?>"><br>

        <label for="email">E-Mail: </label>
        <input type="text" name="email" value="<?= isset($CNPJ)? $email: "" ?>"><br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" value="<?= isset($CNPJ)? $telefone: "" ?>"><br>

        <input type="submit" name="Alterar Dados">
    </form>
</body>
</html>