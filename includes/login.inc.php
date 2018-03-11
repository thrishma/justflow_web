<?php
session_start();

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Errror handlers
	//check if inputs are empty
	if(empty($uid) || empty($password))
	{
		header("Location: ../index.php?login=empty");
		exit();
	}
	else
	{
		$sql = "SELECT * FROM user_details WHERE user_uid ='$uid' OR user_email = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1 )
		{
			header("Location: ../index.php?login=error");
			exit();
		}
		else
		{
			if($row = mysqli_fetch_assoc($result))
			{
				$hashedpasswordCheck = password_verify($password, $row['user_password']);
				if(hashedpasswordCheck == false){
					header("Location: ../index.php?login=error");
					exit();
				}
				elseif($hashedpasswordCheck == true)
				{
					//Log in the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_name'] = $row['user_name'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
		
	}
}else{
	header("Location: ../index.php?login=error");
	exit();
}