<?php 
	session_start();

	$bleeding_time = "";
	$start_date    = "";
	$menstural_cycle_length = "";
	$errors = array(); 
	$_SESSION['success'] = "";	
	$user_name = $_SESSION['username'];	
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	if (isset($_POST['questions'])) {
		$bleeding_time = mysqli_real_escape_string($db, $_POST['bleeding_time']);
		$start_date = mysqli_real_escape_string($db, $_POST['start_date']);
		$menstural_cycle_length = mysqli_real_escape_string($db, $_POST['menstural_cycle_length']);

		// form validation: ensure that the form is correctly filled
		if (empty($bleeding_time)) { array_push($errors, "Please select your bleeding duration"); }
		if (empty($start_date)) { array_push($errors, "Please select your last period start date"); }
		if (empty($menstural_cycle_length)) { array_push($errors, "Please select your last menstural cycle length"); }

		if (count($errors) == 0) {

			$query = "INSERT INTO questions_details (questions_id,username, bleeding_time, start_date, menstural_cycle_length) 
					  VALUES('',$user_name', '$bleeding_time', '$start_date', '$menstural_cycle_length')";
			$results = mysqli_query($db, $query);			
			header('location: ../calendar.php');	
				
				
		}
	}
?>