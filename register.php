<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register - Just Flow</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
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
				<p>Register yourself right here!</p>
				<img src=img/logo.gif class="logo"></img>	
			</div>	
			<form method="post" action="register.php">

				<?php include('errors.php'); ?>

				<div class="input-group">
					<label></label>
					<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
				</div>
				<div class="input-group">
					<label></label>
					<input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $email; ?>">
				</div>
				<div class="input-group">
					<label></label>
					<input type="password" placeholder="Password"  name="password_1">
				</div>
				<div class="input-group">
					<label></label>
					<input type="password" placeholder="Re-type Password"  name="password_2">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="reg_user">Register</button>
				</div>
				<p>
					Already a member? <a href="login.php" style="color:red;">Sign in</a>
				</p>
			</form>
		</div>
	</center>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>