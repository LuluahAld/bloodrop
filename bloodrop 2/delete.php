
<?php

session_start();
$email=$_SESSION['email'];
$mysqli = require __DIR__ . "/database.php";   
$sql="select * from bookapp where (email='$email');";;
$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_row($result);
if (empty($singleRow)) {
     header('Location: donationR.php');
    exit;
    }

?>
<!DOCTYPE html>
<!--Luluah Mohammed Aldakhil 1808720
    Rofidah Jamal Banabilah 1905947
    B9A
    Tuesday, October 18th, 2022
-->
<!---->

<html>

<head>
    <style>
        .right{
    float: right; }

    </style>
    <title>Bloodrop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
    <link rel="stylesheet" href="../CSS/style2.css" /> 
    <script src="/js/validation.js" defer></script>

</head>

 

<body>
<?php include('navbar.php'); ?>
    
<br><br><br><br><br><br>
     
     
     <br><br>
    
        <div class="container"> 
            <!--uploading logo-->
     
        <img src="../images/logo.PNG" alt="" width="230" height="175" />
    
    <br><br><br>
    <b style="color: rgb(162, 161, 161); font-size: 25px;">Confirming that you really want to delete the appointment.</b>
  
    <br>  <br><br>
    <a href="deletd.php">
        <button style="background-color:rgb(204, 204, 204);border-color:black;color:black; font-size: 23px;">Delete Appointment</button>
    </a><br><br>
    <a href="index.php">
        <button style="background-color:rgb(204, 204, 204);border-color:black;color:black;font-size: 23px;">Go back to homepage</button>
    </a>
        </div>   
     

</body>

</html>
