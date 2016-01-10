<html>

	<head>
	<title>Login</title>

	</head>
	<body>
	
	<?php

	// Check if username and password are correct
	if ($_POST["username"] == "" && $_POST["password"] == "") {
	 
	// If correct, we set the session to YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  echo <a href='user.html'></a>;
	  
	 
	}
	else {
	 
	// If not correct, we set the session to NO
	  session_start();
	  $_SESSION["Login"] = "NO";
	  echo "<a href='blog.html'></a>";
	 
	}

	?>

	</body>
	</html>
