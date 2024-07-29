<?php
 
$user_name = "root";
$password = "";
$database = "bookingkp";
$host_name = "localhost"; 
 
mysql_connect($host_name, $user_name, $password) or mysql_error();
mysql_select_db($database) or mysql_error();
 
?>