<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css" ></link>
    <link rel="stylesheet" type="text/css" href="css/index.css" ></link>

    <title>Just Flow</title>
  </head>	
  <body>
    <header>
    	<nav>
    		<div class="main-wrapper">
    			<ul>
    				<li><a href="index.php">Home</a></li>
    			</ul>
    			<div class="nav-login">
                    <?php
                        if(isset($_SESSION['u_id'])){
                            echo '<form action="includes/logout.inc.php" method="POST">
                                        <button type="submit" name="submit">Logout</button>
                                    </form>';
                        } else{
                            echo '<form action="includes/login.inc.php" method="POST">
                                    <input type="text" name="uid" placeholder="Username">
                                    <input type="password" name="password" placeholder="Password">
                                    <button type="submit" name="submit" href="index.php">Login</button>
                                </form>
                                <a href="signup.php">Sign Up</a>';
                        }
                    ?>         
    				
    			</div>

    		</div>
    	</nav>
    </header>