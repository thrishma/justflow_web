<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="icon" type="image/png" href="img/logo.png" />

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
	<center>
		<div class="main_wrapper">
			<div class="header">
				<h2>Welcome to Just Flow</h2>
				<p>The go to app for menstural problems</p>
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
					<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
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
					Already a member? <a href="login.php">Sign in</a>
				</p>
			</form>
		</div>
	</center>
</body>
</html>