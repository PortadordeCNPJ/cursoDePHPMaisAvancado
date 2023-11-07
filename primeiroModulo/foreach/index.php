<?php 

$names = ['Guilherme', 'Maria','Joao'];
foreach ($names as $key => $name) {
    if ($key === 1){
        continue;
        // break;
    }
    echo $name;
}
?>