<?php  

//For

$names = ['Guilherme','OLAMUNDO','Pedro'];

for ($i = 0; $i < count($names); $i++) {
    if($i === 1){
        continue;
        // break;
    }
    echo $name[$i]; 
}


?>