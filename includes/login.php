<?php

session_start();

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';

	$uid = mysqli_real_escacpe_string($conn, $_POST['uid']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Errror handlers
	//check if inputs are empty
	if(empty($uid) || empty($password)){
		header("Location: ../login.php?login=empty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_id='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1 ){
			header("Location: ../login.php?login=error");
			exit();
		}else{
			if($row = mysql_fetch_assoc($result)){
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if(hashedPwdCheck == false){
					header("Location: ../login.php?login=error");
					exit();
				}elseif($hashedPwdCheck == true){
					//Log in the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_name'] = $row['user_name'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../login.php?login=success");
					exit();
				}
			}
		}
		
	}
	}else{
		header("Location: ../login.php?login=error");
		exit();
}