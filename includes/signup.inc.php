<?php

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email= mysqli_real_escape_string($conn, $_POST['email']);	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//check for empty fields
	if(empty($name) || empty($email) || empty($uid) || empty($password)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}else{
		//check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $name)){
			header("Location: ../signup.php?signup=invalidname");
			exit();
		}else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=email");
				exit();
			}else{
				$sql = "SELECT * FROM user_details WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0){
					header("Location: ../signup.php?signup=usertaken");
					exit();
				}else{
					//hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//insert the user into the database
					$sql = "INSERT INTO user_details (user_name, user_email, user_uid, user_password ) VALUES ('$name', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}

}else{
	header("Location: ../signup.php");
	exit();

}
?>