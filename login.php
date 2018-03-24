<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<!-- Style sheet -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="icon" type="image/png" href="img/logo.png" />

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
	<center>
		<div class="main_wrapper">
			<div class="header">
				<h2>Welcome to <br>Just Flow</h2>
				<p>The go to app for menstural problems</p>
				<img src=img/logo.gif class="logo"></img>				
			</div>
			
			<form method="post" action="login.php">

				<?php include('errors.php'); ?>

				<div class="input-group">
					<label></label>
					<input type="text" name="username" placeholder="Username">
				</div>
				<div class="input-group">
					<label></label>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="login_user">Login</button>
				</div>
				<p>
					Not yet a member yet? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
	</center>
</body>
</html>