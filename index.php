<?php

	include("includes/config.php");
	//session_destroy(); for logout

	if (isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}
	else{
		header("Location: register.php");
	}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>OMSP || Home </title>
</head>
<body>
	<center>
		<h1>Welcome <br>to<br> Online Music Streaming Platform</h1>
	</center>

</body>
</html>
