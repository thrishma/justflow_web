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
	<title>Medicines - Just Flow</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<link rel="stylesheet" type="text/css" href="css/medicines.css">	

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
				<h2>Are you in pain? <br>Do you want Medicines to help you tackle your menstrual problems?</h2>
				<h4>Here is a list of medicines that will help you out</h4>
				<marquee class="scroll" behavior="scroll" direction="left">DISCLAIMER: This list is only for reference. Please consult gynaecologist before any specified drug intake </marquee>
			</div>
			<div class="content">
				<div class="container">   
					<?php
					include('serverLoginDetails.php');	
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					?>  
				  <table class="table">
				    <thead>
				      <tr class="header-drug">
				        <th>Drug Name</th>
				        <th>Description</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>
						<?php
						$sql = "SELECT Name FROM medicines where id=1";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Name"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				        <td>
						<?php
						$sql = "SELECT Description FROM medicines where id=1";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Description"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				      </tr>
					<tr>
				        <td>
						<?php
						$sql = "SELECT Name FROM medicines where id=2";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Name"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				        <td>
						<?php
						$sql = "SELECT Description FROM medicines where id=2";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Description"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				      </tr>
					  
					    <tr>
				        <td>
						<?php
						$sql = "SELECT Name FROM medicines where id=3";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Name"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				        <td>
						<?php
						$sql = "SELECT Description FROM medicines where id=3";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Description"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				      </tr>
					  
					    <tr>
				        <td>
						<?php
						$sql = "SELECT Name FROM medicines where id=4";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Name"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				        <td>
						<?php
						$sql = "SELECT Description FROM medicines where id=4";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Description"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				      </tr>
					  
					    <tr>
				        <td>
						<?php
						$sql = "SELECT Name FROM medicines where id=5";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Name"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				        <td>
						<?php
						$sql = "SELECT Description FROM medicines where id=5";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["Description"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						?>
						</td>
				      </tr>
				    </tbody>
				  </table>
				</div>	
			</div>			
		</div>
	</center>


</body>
</html>
