<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/calendar.css" rel="stylesheet">
    <title>Period Calendar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <style>
    .dp-highlight .ui-state-default {
        background: #484;
        color: #FFF;
    }

    </style>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/calendar.css">

    <link rel="icon" type="image/png" href="img/logo.png" />

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body>
    <center>
        <div class="main_wrapper">
           <div class="header">
                <h2>Period Tracker</h2>
                <p>Wondering, "When will I get my period?" <span style="color:red";>Just Flow</span> knows! Our easy tracking tool helps map out your cycle for months. Plan a period-free beach trip or a big event like a wedding.</p>
                     
            </div>
            <div id="user_name" data-prodnumber="${sessionScope.username}" />
                <div id="txtDate">
                <?php
               
                $bleeding_time = "";
                $start_date    = "";
                $errors = array(); 
                $_SESSION['success'] = "";
                $user_name = $_SESSION['username'];   

                // connect to database
                $conn =     mysqli_connect('localhost', 'root', '', 'registration');
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT * FROM questions_details where username = '$user_name'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {  

                // echo $row['bleeding_time']."<br>";   
                    echo '<input id="bleeding_time" value='.$row['bleeding_time'].' style="display:none;"></input>';
                    echo '<input id="start_date" value='.$row['start_date'].' style="display:none;"></input>';
                    
                    }
                } else {    
                    echo "0 results";
                }
                $conn->close();
                ?>
                    <script>
                        var bleedingTime = parseInt(document.getElementById("bleeding_time").value);
                        var startDate = document.getElementById("start_date").value;
                        var startDateArray = startDate.split(/[-]/);
                        var year= parseInt(startDateArray[0]);
                        var month= parseInt(startDateArray[1]+1);
                        var day= parseInt(startDateArray[2]);          
                        $(document).ready(function () {
                            $("#txtDate").datepicker({
                                beforeShowDay: function (date) {                                   
                                    return [true, date.getDate() >= day && date.getDate() <= (day+bleedingTime) ? "dp-highlight" : ""];             
                                }
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="color_box">
                <div class="red"></div>
                <p>It's that time again. As the lining of your uterus sheds, your period starts. This is also the official start of your cycle and make sure you’re stocked up on pads or Tampons!</p>                 
            </div>
            <div class="color_box">
                <div class="green"></div>
                <p>It's Today</p>
            </div>
        </div>

    </center>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
