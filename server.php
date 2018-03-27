<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Passwords do not match");
		}

		$check_if_user_name = mysqli_query($db,"SELECT * FROM users WHERE username='$username'");
		$check_if_user_email = mysqli_query($db,"SELECT * FROM users WHERE email='$email'");

		if(mysqli_num_rows($check_if_user_name) > 0){ array_push($errors, "User name has been taken");}
		if(mysqli_num_rows($check_if_user_email) > 0){ array_push($errors, "Email Id is already registered with us");}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$confirmcode = rand();
			$query = "INSERT INTO users (id,username, email, password, confirmed, confirm_code) 
					  VALUES('','$username', '$email', '$password', '0', '$confirmcode')";

			$message = "Please confirm your Email
						Click the below link to verify your account
						https://www.justflow.com/emailconfirmation.php?username=$username&code=$confirmcode";

			mail($email, "Just Flow Confirm Email", $message, "From: DoNotReply@justflow.com");
			echo "Registration complete! Please confirm your email";

			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";			
			header('location: questions.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";				
				header('location: features.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>