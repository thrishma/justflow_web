<?php 
	session_start();

	// variable declaration	
	$email    = "";
	$errors = array();
	$confirmationEMail = array(); 
	$_SESSION['success'] = "";

	// connect to database
	include 'serverLoginDetails.php';

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Passwords do not match");
		}

		$check_if_user_name = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
		$check_if_user_email = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

		if(mysqli_num_rows($check_if_user_name) > 0){ array_push($errors, "User name has been taken");}
		if(mysqli_num_rows($check_if_user_email) > 0){ array_push($errors, "Email Id is already registered with us");}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$confirmcode = rand();
			$query = "INSERT INTO users VALUES('','$username', '$email', '$password', '0', '$confirmcode')";

			$message = "Hey '$username' thank you for Registering with Just FLow - The goto Menstural Application

Please confirm your Email by clicking the below link to verify your account
https://www.thrishma.com/justflow_web/confirmLink.php?username=$username&code=$confirmcode";

			mail($email, "Just Flow Confirmation Email", $message, "From: justflow@thrishma.com");
			array_push($confirmationEmail, "Registration complete! Please confirm your email");

			mysqli_query($conn, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";						
			header('location: login.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if (!(empty($username) || empty($password))) {
		$query = "SELECT confirmed FROM users WHERE username='$username'";
		$results = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($results)){
				if (mysqli_num_rows($results) == 1){
					if($row['confirmed'] == 0){
						array_push($errors, "Email Id has not been verified yet. Please verify your Email Id");
					}
				}
			}
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($conn, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";	
				$query_login_first = "SELECT * FROM users WHERE username='$username'";
				$query_login_first_results = mysqli_query($conn, $query_login_first);
				while($row = mysqli_fetch_array($query_login_first_results)){
					if (mysqli_num_rows($results) == 1){
						if(($row['confirm_code']) == 0){
						header('location: questions.php');
						}else{
							header('location: features.php');
						}
					}
				}				
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>