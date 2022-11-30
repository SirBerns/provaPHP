<?php

function conectaDB(){
    $pdo =  new PDO("mysql:host=localhost:3306;dbname=provaPHP", "root", "positivo");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, $pdo::ERRMODE_EXCEPTION);
    return $pdo;
}



function cadFornecedorDAO($fornecedor){
    $pdo = conectaDB();
    $sql = $pdo->prepare("INSERT INTO CadastroFornecedor VALUES(?, ?, ?, ?, ?, ?)");
    $sql->execute(array_values($fornecedor));
}

function altFornecedorDAO($fornecedor){
    $pdo = conectaDB();
    try{
        $sql = $pdo->prepare('UPDATE CadastroFornecedor SET
        CNPJ= :CNPJ,
        razaoSocial= :razaoSocial,
        nomeFantasia= :nomeFantasia,
        responsavel= :responsavel,
        email= :email,
        telefone = :telefone
        WHERE CNPJ= :CNPJ');
        $sql->execute($fornecedor);
    }catch(PDOException $e){
        throw new Exception ($e->getMessage());
    }


}

function delFornecedorDAO($CNPJ){
    $pdo = conectaDB();
    $pdo->exec("DELETE FROM CadastroFornecedor WHERE CNPJ='$CNPJ'");
    echo "Fornecedor deletado com sucesso";
}

function listarFornecedorDAO(){
    $pdo = conectaDB();
    
    $sql = $pdo->prepare("SELECT * FROM CadastroFornecedor");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function buscarFornecedorDAO($CNPJ){
    $pdo = conectaDB();
    $sql = $pdo->prepare("SELECT * FROM CadastroFornecedor WHERE CNPJ= ?");
    $sql->execute(array($CNPJ));
    return $sql->fetch(PDO::FETCH_ASSOC);
}
