<?php 


//Tipos de Dados que podem mudar valores de variaveis

// (string)
// (boolesn)
// (float)
// (integer)
// (double)
// (object)
// (array)
// intVal
// floatVal
// doubleVal
//strVal
//boolVal

$name = "Guilherme";

$teste = (string)$name;


//Chamando Objects de Arrays

$person = ['name' => 'Guilherme', 'age' => 17];

$change = (object) $person;

var_dump($change->name);