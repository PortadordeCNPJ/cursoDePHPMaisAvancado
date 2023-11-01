<?php

$number1 = 70;
$number2 = 50;
$isAdmin = true;

$resultado = $number1 > $number2 && $isAdmin;

echo ($resultado) ? 'é veradeiro' : 'não é verdeiro';

//Utilizando o return para poder substituir o else. Ele interrompe a execução do proximo comando caso o primeiro retorne true
if($resultado) {
    echo "é Admin";

    return;
}
    echo "não é admin";


//Maneira convencional de fazer if e else
if($resultado) {
    echo "é Admin";
} else {
    echo "não é Admin";
}

?>