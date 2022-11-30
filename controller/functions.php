<?php
require_once("./view/cadCliente.php");

function validaCNPJ($CNPJ) {

if (strlen($CNPJ) != 14)
    return false; 

$soma = 0;
for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++){
    $soma += $CNPJ[$i] * $j;
    $j = ($j == 2) ? 9 : $j - 1;
}

($soma % 11) < 2? $d1 = 0 : $d1 = 11- ($soma % 11);

$soma = 0;
for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++){
    $soma += $CNPJ[$i] * $j;
    $j = ($j == 2) ? 9 : $j - 1;
}
    
($soma % 11) < 2? $d2 = 0 : $d2 = 11- ($soma % 11);

return ($CNPJ[12] == $d1 && $CNPJ[13] == $d2)? true: false;
    
} 

?>