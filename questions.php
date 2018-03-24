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
<!DOCTYPE html>
<html>
<head>
	<title>Questions</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/questions.css">

	<link rel="icon" type="image/png" href="img/logo.png" />

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
	<center>
		<div class="main_wrapper">
			<div class="header">
			<!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Hey <strong style="color:red"><?php echo $_SESSION['username'];?></strong></p>	
					
			<?php endif ?>
			<h2>You’re 3 quick questions away from getting your custom period calendar</h2>
		</div>
		<div class="content">
			<form method="POST" action="include/questions.inc.php">
				<div class="input-group">
					<label>How many days does your bleeding last?</label>
					<input type="number" name="bleeding_time">
				</div>
				<div class="input-group">
					<label>Start date of your last period?</label>
					<input type="date" name="start_date" value="yyyy-mm-dd">
				</div>
				<div class="input-group">
					<label>How long is your menstural cycle?</label>
					<input type="number" name="menstural_cycle_length">
				</div>						
				<button type="submit" class="btn" name="questions">Submit</button>
			</form>
		</div>
		</div>
	</center>
		
</body>
</html>