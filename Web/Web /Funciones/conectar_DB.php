<?php

$connection = new mysqli("192.168.1.57", "root", "Admin2015", "tf",3316);
$connection->set_charset("uft8");
//TESTING IF THE CONNECTION WAS RIGHT
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

 ?>
