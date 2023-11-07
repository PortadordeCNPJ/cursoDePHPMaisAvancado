<?php 

//Essa função usa o método __ivoke por conta da variavel "$person", que é transformada em um objeto privado
$person = function($name){
    return $name;
};
//Chamando dessa forma e com os parenteses, é possível passar um parametro para variável
var_dump($person('Alexandre'));


//com essa função é criada um closure
function teste($name) {
    //Para colocar um parametro para o teste, é preciso utilizar o use e passar junto o name
    $person = function() use ($name){
        return $name;
    };

    return $person;
}

var_dump(teste()());