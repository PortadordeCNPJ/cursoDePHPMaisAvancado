<?php

$name ='guilherme';

//O & passa uma referência sobre a varialvel
$myName = &$name;

$name = 'Souza';

echo $name;
echo $myName;

// $name = 'Guilherme';

// echo gettype($name);

//string
// echo gettype("LDKASJFSDJFSJFK");

//numbers - intergers, float(double)
// echo gettype(12.34);

// booleans/ true or false
// echo gettype(true);

//arrays
// echo gettype(["asdadas", 12]);

//object

// class Person {
    
// }

// echo gettype(new Person);

// //null
// echo gettype(NULL);