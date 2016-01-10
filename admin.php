<?php
session_start();
if(!isset($_SESSION['username'])){
	die("anda belum login");
	
}

if (!isset($_SESSION['password']!="admin")){
	die("anda bukan admin");
}
?>