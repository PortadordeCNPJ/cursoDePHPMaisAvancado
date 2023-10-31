<?php 

$name = 'Guilherme';
//O ponto serve para concatenação de um valor de uma variavel e adiconar algo junto
$name = $name . ' Souza';

//Pode ser também com o ponto antes do operador de atribuição "="
$name .= 'Souza';

//Com número é a mesma coisa, assim com todos os processadores aritiméticos
$number = 20;

$number += 10;

echo $name;
echo $number;

?>