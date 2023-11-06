<?php 

// Numbers 

// 34 interger
// 34.35 double


//PHP trabalha com números entre aspas, para soma e entre funções
$number = '34';
$number2 = 45;


if (is_numeric($number) && is_numeric($number2)) {
    echo 'É númerico';
} else {
    echo 'Não é númerico';
}

?>