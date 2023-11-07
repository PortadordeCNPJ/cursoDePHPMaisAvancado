<?php 

//Função para criar uma conecção com o Banco de Dados.
function connection(){
    //Usando PDO e fazendo a conecção de maneira mais simples, sem alteração no código
    $pdo = new PDO('mysql:host=localhost;dbname=db_bakery','root','');
    return $pdo;
}

//Função de get para poder obter as tabelas do Banco
function getData($tables) {
    $connection = connection();
    $query = $connection->query("select * from {$tables}");
    $query->execute();
    return $query->fetchAll();
}

//Obtendo os valores da tabela de produtos com o Get, através de um Array
var_dump(getData('tb_produtos'));

?>