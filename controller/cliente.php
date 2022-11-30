<?php
require_once("./model/clienteDAO.php");




function listarFornecedor(){
    return listarFornecedorDAO();
    
}

function cadFornecedor($fornecedor){
    cadFornecedorDAO($fornecedor);

}


function deletaFornecedor($CNPJ){
    delFornecedorDAO($CNPJ);
    header("Location:./?p=home");
}


function buscaFornecedor($CNPJ){
    return buscarFornecedorDAO($CNPJ);
}

