<?php 

//Definindo o valor de uma constante, nesse caso NAME que recebe Guilherme.
define("NAME","Guilherme");
    if (defined('NAME')){
    echo "Foi definido" . NAME;
    }


//Function de teste apenas para mostrar os valores das constantes mágicas;
function teste(){

    //Todas as vezes que tiver __ no começo e o final, junto de todas as letras da palavra maiscúla, significa que ela é uma variavel constante
    echo __FUNCTION__;
    echo __METHOD__;
}

teste();

?>