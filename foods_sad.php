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
<html lang="en">
<head>
	<title>Foods - Just Flow</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<link rel="stylesheet" type="text/css" href="css/foods.css">	

	<link rel="icon" type="image/png" href="img/logo.png" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
<?php include('menu.php') ?>

<div class="container">  
 <?php
	include('serverLoginDetails.php');
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>
<center>
<div class="main_wrapper">
<div class="header">			
<h2>Want to feel better through your choice of food?</h2>				
</div>
<div class="content">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

	<!-- Wrapper for slides -->
	<div class="carousel-inner">

	<div class="item active">
	<img src="img/food/page1.jpg" alt="FrontPage" style="width:100%;">
	<div class="content">
	<h3>
	<?php
	$sql = "SELECT Title FROM foods where id=9";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			echo $row["Title"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	?>
	</h3>
	<p>
	<?php
	$sql = "SELECT Content FROM foods where id=9";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row["Content"]. "<br>";
		}
	} 
	else
	{
		echo "0 results";
	}
	?>
	</p>
	</div>
	<style type="text/css">
	.content{padding : 10px;color : white;}
	</style>
	</div>
	
	
	<div class="item">
	<img src="img/food/Sad/food7.jpg" alt="Food" style="width:100%;">
	<div class="content">
	<h3>
	<?php
	$sql = "SELECT Title FROM foods where id=10";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			echo $row["Title"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	?>
	</h3>
	<p>
	<?php
	$sql = "SELECT Content FROM foods where id=10";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			echo $row["Content"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	?>					
	</p>
	</div>
	</div>
	
	<div class="item">
	<img src="img/food/Sad/food8.jpg" alt="Food" style="width:100%;">
	<div class="content">
	<h3>
	<?php
	$sql = "SELECT Title FROM foods where id=11";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			echo $row["Title"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	?>
	</h3>
	<p>
	<?php
	$sql = "SELECT Content FROM foods where id=11";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			echo $row["Content"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	?>					
	</p>
	</div>
	</div>
	
	<div class="item">
	<img src="img/food/Cranky/food9.jpg" alt="Food" style="width:100%;">
	<div class="content">
	<h3>
	<?php
	$sql = "SELECT Title FROM foods where id=12";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			echo $row["Title"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	?>
	</h3>
	<p>
	<?php
	$sql = "SELECT Content FROM foods where id=12";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			echo $row["Content"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	?>					
	</p>
	</div>
	</div>
	</div>
	
	
<?php
mysqli_close($conn);
?>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</center>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
