
<?php

session_start();

if (isset($_SESSION['loggedin'])) {
	header('Location: alrlogin.php');
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

 <?php include('navbar.php'); ?>

<body>

    
<br><br><br><br><br><br><br><br> 
     
    
        <div class="container"> 
            <!--uploading logo-->
     
        <img src="../images/logo.PNG" alt="" width="230" height="175" />
    
    <br><br><br>
    <b style="color: rgb(162, 161, 161); font-size: 25px;">Please choose a credential to login by</b>
  
    <br>  <br><br>
    <a href="login.php">
        <button style="background-color:rgb(204, 204, 204);border-color:black;color:black; font-size: 23px;">Username</button>
    </a><br><br>
    <a href="loginE.php">
        <button style="background-color:rgb(204, 204, 204);border-color:black;color:black; font-size: 23px;">Email</button>
    </a>
        </div>   
     

</body>

</html>