<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>


<!-- Style sheet -->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="icon" type="image/png" href="img/logo.png" />

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Just Flow</title>
</head>
<body>
	<center>
		<main>
			<div class='main_wrapper'>
				<div class="header">
					<h2>Welcome to Just Flow</h2>
				    <h2>The go to menstural application</h2>
				    <img src="img/logo.gif" class="logo"></img>
				</div>
       
		       <a href="login.php">Log in</a>
		       <a href="register.php">Sign up</a>
		    </div>
		</main>
	</center>
		
</body>
</html>