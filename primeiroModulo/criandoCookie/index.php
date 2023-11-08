<?php 

//para que adicione cookies e dando um prazo para ele
setcookie('name', 'Guilherme', strtotime('+5days'));


//Excluindo cookies
setcookie('name', 'Guilherme', strtotime('-5days'));

