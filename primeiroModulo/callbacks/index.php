<?php

//Funções passadas como parametros para outras funções 

//Função do teste que é recebe um paramentro da função2, assim quando é chamada o teste2 ele manda como parametro o nome Alexandre
//Tendo como parametro o nome, ele atribui a variavel $name
function teste($name)
{
    return 'Ola, meu nome é ' . $name;
}

function teste2($callback)
{   
    //Teste para ver o que está mandadando o parametro é realmente o callback
    if (is_callable($callback)){
    return $callback('Alexandre');
    }
}

//A variavel $user agora é um callback, pois ela está recebendo o resultado da função de teste. Essa variável agora pode ser usada como função
$user = 'teste';
echo teste2($user);