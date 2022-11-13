<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    $email = $_POST["email"];
    $username=$_POST["username"];
    $invalidE = false;
    $invalidEm =false;
    $invalidPs= false;
    $invalidPl= false;
    $invalidPn= false;
    $invalidPm= false;
    $invalidU= false;
    $invalidUs= false;

    $sql="select * from user where (email='$email');";;
    $sql2="select * from user where (username='$username');";;
    $res=mysqli_query($mysqli,$sql);
    $res2=mysqli_query($mysqli,$sql2);
    if (mysqli_num_rows($res2) > 0) {
        $invalidU= true;
    }elseif (strlen($_POST["username"]) < 8) {
        $invalidUs= true;
    }elseif (mysqli_num_rows($res) > 0) {
        $invalidE = true;
        
    } elseif (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $invalidEm =true;
    } elseif(strlen($_POST["password"]) < 8){
    $invalidPs= true;
    }
    elseif(! preg_match("/[a-z]/i", $_POST["password"])){
        $invalidPl= true;
    }elseif(! preg_match("/[0-9]/", $_POST["password"])){
        $invalidPn= true;
    }elseif ($_POST["password"] !== $_POST["password_confirmation"]) {
        $invalidPm= true;
    }
     else {
       
    }
    
    if(!$invalidE AND !$invalidEm AND !$invalidPs AND !$invalidPl AND !$invalidPn AND !$invalidPm AND !$invalidU AND !$invalidUs){
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
   
    $sql = "INSERT INTO user (username,email, password_hash)
            VALUES (?,?,?)";   
    $stmt = $mysqli->stmt_init();
    
    if ( ! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }
    
    $stmt->bind_param("sss",
                      $username,
                      $_POST["email"],
                      $password_hash);
                      
    if ($stmt->execute()) {
    header("Location: signup-success.php");
        exit;
        
    } else {
    
        
        
        if ($mysqli->errno === 1062) {
            
            die("email already taken");
        } else {
            die($mysqli->error . " doesnt work " . $mysqli->errno);
        }
    }
}}

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
<br><br><br><br><br>
    <form  method="post" id="signup" >  
        <div class="container"> 
            <!--uploading logo-->
     
        <img src="../images/logo.PNG" alt="" width="230" height="175" />
    
    <br>
    <!--beginning of input & labels for login info-->
    <br>  
            <label for="username"> Username</label>  <br> 
            <input type="text" placeholder="Enter Username" name="username"  id = "username" required >  <br>
            <?php if ($invalidU): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b>
            Username already used<br>
            </b></em>
            
    <?php endif; ?>
    <?php if ($invalidUs): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b>
        Username must be at least 8 characters<br>
            </b></em>
            
    <?php endif; ?>

            <label for="email"> Email </label>  <br> 
            <input type="text" placeholder="Enter Email" name="email"  id = "email"required >  <br>
            <?php if ($invalidE): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b>
            Email already used<br>
            </b></em>        
    <?php endif; ?>
    <?php if ($invalidEm): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b>
            <br>
            A valid email is required
            </b></em><?php endif; ?>
            <label for="password">Password </label>   
            <input type="password" placeholder="Enter Password" name="password" id = "password" required>  
            <label for="password_confirmation">Confirm Password </label>  
            <input type="password" placeholder="Confirm Password" name="password_confirmation" id = "password_confirmation" required>
            <?php if ($invalidPs): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b> <br>
        Password must be at least 8 characters
            </b></em><br>
            
    <?php endif; ?> 
    <?php if ($invalidPl): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b>
        <br>Password must contain at least one letter
            </b></em><br>
            
    <?php endif; ?> 
    <?php if ($invalidPn): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b>
        <br>Password must contain at least one number
            </b></em><br>
            
    <?php endif; ?>
     <?php if ($invalidPm): ?>
        <em style="color: red ; font-size: 20px; text-allign: left"><b>
        <br>Passwords must match
            </b></em><br>
            
    <?php endif; ?> 
            <br><br><button type="submit" style = "font-size: 23px;">Signup</button>   
            <br><br> 
            <a href="loginby.php" style="color: black ; font-size: 18px;">Have an account? Login </a>   
        </div>   
    </form>     

</body>

</html>
