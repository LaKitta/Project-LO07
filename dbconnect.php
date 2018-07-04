<?php
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');//define ('DB_USER', 'xugang');
define ('DB_PASSWORD', 'root');//define ('DB_PASSWORD', 'rOcbQ6wj');
define ('DB_NAME', 'xugang');

$mydb = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Connection Impossible:'+ $database->connect_error);

?>