<?php 

// Booleanos - true, false

// $_SESSION['logged'] = false;

//asaasadasd

// $_SESSION['logged'] = true;

// if($_SESSION['logged']){
//     echo 'É verdadeiro';
// }


// for ($i = 0; $i <= 10; $i++) {
//     echo $i;
// }

$name = 'Guilherme';
$age = 17;
$logged = false;

if ($name && $age < 18 && !$logged) {
    echo'Está logado';
}else {
    echo 'Não pode logar';
}