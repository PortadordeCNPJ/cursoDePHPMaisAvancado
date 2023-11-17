<?php 

    $email = $_POST['email'];
    $name = $_POST['name'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email váilido';
    } else {
        echo 'email não valido';
    }
?>