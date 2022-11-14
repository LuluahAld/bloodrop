<?php

session_start();
$email=$_SESSION['email'];
$mysqli = require __DIR__ . "/database.php";   
$query = "DELETE FROM bookapp WHERE email='$email'";
mysqli_query($mysqli, $query);

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
     
     
     <br><br><br> <br> 
   
        <div class="container"> 
            <!--uploading logo-->
            <br> <br> <br> 
        <img src="../images/logo.PNG" alt="" width="230" height="175" />
    
    <br><br><br>
    <b style="color: rgb(162, 161, 161); font-size: 25px;"> Hello, <?php echo $_SESSION['username']; ?><br> <br>
    <b style="color: rgb(162, 161, 161); font-size: 20px;"> Appointment deleted for this email <br>(<?php echo $_SESSION['email']; ?>)<br> <br>
    <a href="bookApp.php" style = "color: black;"><b>Book a New Appointment</b></a>
    
   </b>
    <br>  <br> <br> <br> 
           </div>   
     

</body>

</html>
