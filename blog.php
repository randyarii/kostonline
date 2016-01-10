<?php 
session_start();

if(!isset($_SESSION['username'])){
	header("location:loginuser.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>E-Kost Online Welcome Admin</title>
	
	<!-- Skrip CSS -->
	<style>
.container {
	width: 50%;
    margin: 0 auto;
}
 
h2{
 background-color: red;
 padding: 30px 35px;
 margin: -10px -50px;
 text-align:center;
 color: #fff;
}
 
hr{
 margin: 10px -50px;
 border: 0;
 border-top: 1px solid #ccc;
 margin-bottom: 25px;
}
 
div.main{
 width: 306px;
 padding: 10px 50px 30px;
 border: 2px solid black;
 font-family: raleway;
 float:center;
 margin-top:25px;
}
 
input[type=text]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid black;
 color: black;
 font-size: 16px;
 font-weight: bold;
}
 
input[type=password]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid black;
 color: black;
 font-size: 16px;
 font-weight: bold;
}
 
label{
 color: red;
 text-shadow: 0 1px 0 #fff;
 font-size: 14px;
 font-weight: bold;
}
 
input[type=submit]{
 font-size: 16px;
 background: red;
 color: white;
 font-weight: bold;
 cursor: pointer;
 width: 100%;
 padding: 10px 0;
 outline:none;
}

  </style>
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form action="loginuser.php" method="post">
			<h2>USER</h2>	
			<h2>E-Kost Online</h2><hr/>		
			
			<label>Username :</label>
			<input id="username" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
		  </form>
		</div>
   </div>
 
  </body>
</html>