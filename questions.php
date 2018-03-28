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
	<title>Questions - Just Flow</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/questions.css">

	<link rel="icon" type="image/png" href="img/logo.png" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<?php include('menu.php') ?>
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
						<img src="img/questionsSymbol.png" class="questionsSymbol" onclick="bleedingDays()">							
					<input type="number" name="bleeding_time">

				</div>
				<div class="input-group">
					<label>Start date of your last period?</label>
					<img src="img/questionsSymbol.png" class="questionsSymbol" onclick="startDate()">							
					<input type="date" name="start_date" value="yyyy-mm-dd">
				</div>
				<div class="input-group">
					<label>How long is your menstrual cycle?</label>
					<img src="img/questionsSymbol.png" class="questionsSymbol" onclick="menstrualCycle()">
					<input type="number" name="menstural_cycle_length">
				</div>						
				<button type="submit" class="btn" name="questions">Submit</button>
			</form>
		</div>
		</div>
	</center>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		function bleedingDays(){
			swal('Normal menstruation can last from one to seven days, although for most women with regular menstrual cycles, their period lasts an average of three to five days.');
		}
		function startDate(){
			swal('The previous start date of your menstural cycle');
		}
		function menstrualCycle(){
			swal('The menstrual cycle, which is counted from the first day of one period to the first day of the next, isnt the same for every woman. Menstrual flow might occur every 21 to 35 days and last two to seven days.');
		}
	</script>
		
</body>
</html>