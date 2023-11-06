<?php 

//Strings

$age = 17;

//Interpreta e executa variaveis que estejam em aspas duplas
$name = "Guilherme $age";

//Aspas simples não pegam valor de variavel, apenas string
$name = 'Guilherme $age';

//strlen conta o número de caracteres que tem na string
echo strlen($name);
?>