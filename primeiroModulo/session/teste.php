<?php 

$_SESSION['name'] = 'guilherme';

$nameSession = $_SESSION['name'];

//Para mudar o Id toda a vez que a pessoa atualizar a página(id de session)
session_regenerate_id();

//Fecha todas as seções abertas
// session_destroy();

if(isset($nameSession)){
 echo 'Sessão esta logada ' . $nameSession;
} else {
 echo 'Sessão não está logada';

}
