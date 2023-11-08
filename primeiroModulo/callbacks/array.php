<?php 

function teste($name, $age)
{
    return 'Óla meu nome é ' . $name .' e minha idade é de '. $age .'';
}

//O mesmo que já estava sendo feito. Passar o nome da função no começo, depois passar os parametros para dentro das variaveis pelo callback
echo call_user_func_array('teste',['Guilherme', '45']);
?>