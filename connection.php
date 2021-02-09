<?php

$connection = mysqli_connect('host', 'username', 'password', 'Database name');

if(!$connetion){
    echo 'Otra vez noooo' . mysqli_connect_error();
}
?>
