<?php
 
$user_name = "root";
$password = "";
$database = "e-kost";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {
 
 echo " ";
 
}else {
 
 echo "Database Tidak Ada";
 
}
 
?>