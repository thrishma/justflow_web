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
			<h2>Just Flow - The go to menstural application</h2>
		</div>
		<div class="content">
			<?php
$action=$_REQUEST['action'];
if ($action=="") /** display the contact form */
{
?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="action" value="submit">
Your name:<br>
<input name="name" type="text" value="" size="30"/><br>
Your email:<br>
<input name="email" type="text" value="" size="30"/><br>
Your message:<br>
<textarea name="message" rows="7" cols="30"></textarea><br>
<input type="submit" value="Send email"/>
</form>
<?php
}
else/* send the submitted data */
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
if (($name=="")||($email=="")||($message==""))
{
echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
}
else
$from="From: $name<$email>\r\nReturn-path: $email";
$subject="Message sent using your contact form";
mail("youremail@yoursite.com", $subject, $message, $from);
echo "Email sent!";
?>			
		</div>
		</div>
	</center>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
</body>
</html>