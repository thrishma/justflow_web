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
<style>
.content{
        text-align: left;
    }

	.list{
		text-align: left;
		padding-left:20px;
		padding-top:10px;
		font-size: 20px;
	}
	.list>a{
		text-decoration:none !important;
		color: white;
		display: block;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>About Us - Just Flow</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">	

	<link rel="icon" type="image/png" href="img/logo.png" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
	<?php include('menu.php') ?>
	<center>
		<div class="main_wrapper">
			<div class="header">			
			<h2>Just Flow - The go to menstrual application</h2>
		</div>
		<div class="content">
			<p>A group of 3 female students have developed this application to eradicate the use of pen and paper to keep track of menstrual cycles. Not knowing how to take care of your mood swings, cravings or even your cramps a thing of past. With Just Flow you can take care of all these things with just a single application.</p>
			<div class="list">
				<p>We offer features such as-</p>
				<a href="calendar.php">- Period Tracker</a>
				<a href="moodTracker.php">- Exercises and Foods based on your moods</a>
				<a href="games.php">- Stress buster games to control your mood swings</a>
				<a href="medicines.php">- Information about medicines to ease your flow</a>
				<a href="faqs.php">- Answers to all your basic periods related questions</a>				
			</div>	
            <img src="img/friends.png" alt="friends" style="width:100%"></img>			
		</div>
		</div>
	</center>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
</body>
</html>