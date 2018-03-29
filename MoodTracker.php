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
  <title>Mood Tracker - Just Flow</title>
  <link rel="stylesheet" type="text/css" href="css/main.css"> 
  <link rel="stylesheet" type="text/css" href="css/moodtracker.css"> 

  <link rel="icon" type="image/png" href="img/logo.png" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- font family -->
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
  <?php include('menu.php') ?>
  <center>
    <div class="main_wrapper">
      <div class="header">      
        <h2>Hey lady!! How are you feeling today?</h2>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-xs-4">
            <a href="Options_Cranky.php"><img class="img-responsive icons" src="img/smilie/angry.png" alt="Angry Emoji"></a>
            <a href="Options_Cranky.php"><span class="label label-default" name="Cranky">Cranky</span></a>
          </div>
          <div class="col-xs-4">
            <a href="Options_Confused.php"><img class="img-responsive icons" src="img/smilie/confused.png" alt="Confused Emoji"></a>
            <a href="Options_Confused.php"><span class="label label-default" name="Confused">Confused</span></a>
          </div>
          <div class="col-xs-4">
            <a href="Options_Craving.php"><img class="img-responsive icons" src="img/smilie/crying.png" alt="Crying Emoji"></a>
            <a href="Options_Craving.php"><span class="label label-default" name="Craving">Craving</span></a>   
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4">
            <a href="Options_Sad.php"><img class="img-responsive icons" src="img/smilie/sad.png" alt="Sad Emoji"></a>
            <a href="Options_Sad.php"><span class="label label-default" name="Sad">Sad</span></a>
          </div>
          <div class="col-xs-4">
            <a href="Options_Happy.php"><img class="img-responsive icons" src="img/smilie/happy.png" alt="Happy Emoji"></a>
            <a href="Options_Happy.php"><span class="label label-default" name="Happy">Happy</span></a>
          </div>
          <div class="col-xs-4">
            <a href="Options_Stressed.php"><img class="img-responsive icons" src="img/smilie/grumpy.jpg" alt="Grumpy Emoji"></a>
            <a href="Options_Stressed.php"><span class="label label-default" name="Stressed">Stressed</span></a>
          </div>
        </div>        
      </div>      
    </div>
  </center>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>