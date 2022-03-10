<?php 

// connect to DB
$conn = mysqli_connect('localhost', 'sanestreet', 'test1234', 'php_pizza');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>