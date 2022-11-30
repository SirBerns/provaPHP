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
<table>
        <tr>
            <th>CNPJ</th>
            <th>Razão Social</th>
            <th>Nome Fantasia</th>
            <th>Responsável</th>
            <th>E-Mail</th>
            <th>Telefone</th>
            <th>Excluir</th>
            <th>Alterar</th>
        </tr>
    <?php
    $fornecedor = listarFornecedor();
    foreach($fornecedor as $for){
        echo "<tr>";
        echo "<td>".$for["CNPJ"]."</td>";
        echo "<td>".$for["razaoSocial"]."</td>";
        echo "<td>".$for["nomeFantasia"]."</td>";
        echo "<td>".$for["responsavel"]."</td>";
        echo "<td>".$for["email"]."</td>";
        echo "<td>".$for["telefone"]."</td>";
        echo "<td><a href=\"?p=home&deleta=".$for["CNPJ"]."\"> Excluir </a></td>";
        echo "<td><a href=\"./?p=alt&altera=".$for["CNPJ"]."\"> Alterar </a></td>";
        echo "</tr>";
    }

    if (isset($_GET["deleta"])){
        deletaFornecedor($_GET["deleta"]);
    }
    ?>
    </table>

    </body>
</html>