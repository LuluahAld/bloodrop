<?php

$is_invalid = false;

session_start();

if (isset($_SESSION['loggedin'])) {
	header('Location: alrlogin.php');
	exit;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE username = '%s'",
                   $mysqli->real_escape_string($_POST["username"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            $username=$_POST["username"];
            $sql="select * from user where (username='$username');";;
            $result=mysqli_query($mysqli,$sql);
            $singleRow = mysqli_fetch_row($result);
            
		    $_SESSION['loggedin'] = TRUE;
		    $_SESSION['email'] = $singleRow['1'];
            $_SESSION['username'] = $_POST['username'];
            
        header("Location: index.php");
        exit;
        }
    }
    $is_invalid = true;

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
    <title>Bloodrop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
    <link rel="stylesheet" href="../CSS/style2.css" /> 
    

</head>

 

<body>
<?php include('navbar.php'); ?>
<br><br><br><br><br><br>
     
     
     <br><br><br> 
    <form method= "post">  
        <div class="container"> 
            <!--uploading logo-->
     
        <img src="../images/logo.PNG" alt="" width="230" height="175" />
    
    <br>
    <!--beginning of input & labels for login info-->
    <br>  
            <label for="username"> Username </label>  <br> 
            <input type="text" placeholder="Enter Username" name="username" id = "username" value="<?= htmlspecialchars($_POST["username"] ?? "") ?>"  required>  <br> <br>
            <label for="password">Password </label>   <br>
            <input type="password" placeholder="Enter Password" name="password" id = "password" required >  
            <button type="submit" style = "font-size: 25px;">Login</button>   
            <br><br> 
            <?php if ($is_invalid): ?>
        <em style="color: red ; font-size: 18px;"><b>User information is not valid<br>
            (Please check login credentials)</b></em>
    <?php endif; ?>
    <br><br>
            <a href="signup.php" style="color: black ; font-size: 18px;"  > Don't have an account? Signup </a>  
		<p>
      <label>

        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me 
      </label>
        </div>   
    </form>     

</body>

</html>
