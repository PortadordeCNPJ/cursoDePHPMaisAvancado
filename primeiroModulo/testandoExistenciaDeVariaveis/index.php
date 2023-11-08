<?php 

$name1 = 'Guilherme';

if (isset($name)){
    echo $name . ' é lindo!!';

} else {
    
  echo 'Tu é feio';
}

$person = ['name' => 'Guilherme', 'idade' => 17];

if (isset($person['name'])) {
    echo 'É muito shapado!!';
}
