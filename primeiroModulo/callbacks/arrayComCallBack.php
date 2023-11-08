<?php 

//criando uma classe de usuario, para passar os valores dos parametros para ele através do callback
class User {

    //essa função, recebe $name e $age que são enviados do call_user_func
    public function teste($name, $age) {
        return 'Óla meu nome é ' . $name . ' e minha idade é ' . $age;
    }
}

//instanciando o objeto
$user = new User;

//esses valores vem através de um Array que começa com o objeto, depois vem a função que ira receber esse parametros e após iso os parametros
echo call_user_func([$user, 'teste'], 'Guilherme', 17);
