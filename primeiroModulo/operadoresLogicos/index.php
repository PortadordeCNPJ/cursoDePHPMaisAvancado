<?php 

// &&(and), ||(or), !

$canAccess = true;
$isOlder = false;

//Se o resultado os dois resultados forem true, então retorna true. Caso tenha false ele retorna false
// $result = $canAccess && $isOlder;

//Se algum resultado for true, então retorna true. Caso os dois sejam false, ele retorna false
$result = $canAccess || $isOlder;

var_dump($result);
?>