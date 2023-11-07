<?php 

function connection(){
    $pdo = new PDO('mysql:host=localhost;dbname=db_bakery','root','');
    return $pdo;
}

function getData($tables) {
    $connection = connection();
    $query = $connection->query("select * from {$tables}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData('tb_produtos'));

?>