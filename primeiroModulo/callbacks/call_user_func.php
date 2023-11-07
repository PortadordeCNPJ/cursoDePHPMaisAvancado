<?php 

//Usado quando um callback tem que ser usado como função e depois colocar os parametros que ele está exigindo
function teste($name){

    return 'Óla meu nome é' . $name;
}

echo call_user_func('teste', 'Guilherme');

?>