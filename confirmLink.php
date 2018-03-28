
<!DOCTYPE html>
<html>
<head>	
	<title>Confirm your Email Id - Just Flow</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<link rel="stylesheet" type="text/css" href="css/features.css">	

	<link rel="icon" type="image/png" href="img/logo.png" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
	<?php include('menu_withOutLogo.php') ?>
	<center>
		<div class="main_wrapper">
			<div class="header">
				<?php 
					//variable declaration

					
					$code    = "";
					$db_code    = "";

					include 'serverLoginDetails.php';
					$username = $_GET['username'];
					$code = $_GET['code'];

					$results = mysqli_query($conn,"SELECT * FROM users where username = '$username'");	
				    $row = mysqli_fetch_array($results);

					$db_code = $row['confirm_code'];
					if($code == $db_code){
						mysqli_query($conn,"UPDATE users set confirmed=1,confirm_code=0 where username = '$username'");						
						echo "<h2>Thank you for confirming your Email Id, Please log in to your account</h2>";
						echo "<div class='content'>";
						echo "<button class='btn'><a href='login.php'>Log in</a></button>";
						echo "</div>";
												
					}
					else{
						echo "<h2>There was an error while verifying your email Id, Please register again with us</h2>";
						echo "<div class='content'>";
						echo "<button class='btn'><a href='register.php'>Sign Up</a></button>";
						echo "</div>";
					}
				?>				
			</div>					
		</div>
	</center>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
</body>
</html>