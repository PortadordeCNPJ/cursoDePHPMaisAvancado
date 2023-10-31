<?php
//Ele puxa páginas que estão em outros arquivos, mas ele não deixa executar o resto do conteúdo da página caso algo esteja de errado 
require './primeiroModulo/requireEInclude/teste.php';
//Include executa as informações que tem dentro da página, mas caso haja algum erro, ele vai mostrar o erro e vai continuar executanto
//o que tem em baixo
include './primeiroModulo/requireEInclude/teste.php';

//require_once serve para que mesmo sendo puxada as informações mais de uma vez, ele só mostrara uma vez na tela. Com o mesmo propósito
//do require normal
require_once './primeiroModulo/requireEInclude/teste.php';
//include_once serve para que mesmo sendo puxada as informações mais de uma vez, ele só mostrara uma vez na tela. Com o mesmo propósito
//do include normal
include_once './primeiroModulo/requireEInclude/teste.php';
?>