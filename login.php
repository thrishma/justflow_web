<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Just Flow</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



	<!-- Style sheet -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="icon" type="image/png" href="img/logo.png" />

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
	<?php include('menu_withOutLogo.php') ?>

	<center>

		<div class="main_wrapper">
			<div class="header">
				<h2>Welcome to Just Flow</h2>
				<p>The go to menstrual application</p>
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
					Not a member yet? <a href="register.php" style="color:red;">Sign up</a>
				</p>
			</form>
		</div>
	</center>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</body>
</html>