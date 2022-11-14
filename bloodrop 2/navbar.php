<?php

session_start();

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
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" /> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>


<body>
    <!-- a ribon that states save lives position: bottom left, fixed-->
    <div class="cr cr-bottom cr-left cr-sticky cr-pink">Save Lives!</div>
    <!--use of a navigation bar that is fixed on top using ul's, bold, italic, and change of font size-->
    <div id="navbar">
    <ul>
        <li><a href="index.php">
                <font size="+1.75"><b>Homepage</b></font>
            </a></li>
            <li><a href="contact.php">
                <font size="+1.75"><b>Contact Us</b></font>
            </a></li>
    
            <?php if (!isset($_SESSION['loggedin'])): ?>
        <li class="dropdown" class = "right">
            <a href="javascript:void(0)" class="dropbtn">
                <font size="+1.75"><b>User</b></font>
            </a>
            <div class="dropdown-content" >
                <a href="loginby.php"><b><i>Login</i></b></a>
                <a href="signup.php"><b><i>Sign up</i></b></a>
                <a href="bookApp.php"><b><i>Book Appointment</i></b></a>
                <a href="donationC.php"><b><i>View Donation Centers</i></b></a>
                

            </div>
            <?php endif; ?>
            <!--use of dropdown for navbar-->
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">
                    <font size="+1.75"><b>Media</b></font>
                </a>
                <div class="dropdown-content">
                    <a href="video.php"><b><i>Videos</i></b></a>
                    <a href="gallery.php"><b><i>Pictures</i></b></a>
                </div>
        </li>
        <li><a href="resume.php">
                <font size="+1.75"><b>Get to know us</b></font>
            </a></li>
        <?php if (isset($_SESSION['loggedin'])): ?>
            <li class = "right" ><a href="logout.php">
                <font size="+1.75"><b>Logout</b></font>
            </a></li>
            <li class="dropdown" style= "float:right;">
            <a href="javascript:void(0)" class="dropbtn">
            <font size="+1.75"><b style="text-align: center;">Hello, <?php echo $_SESSION['username']; ?></b></font>
            </a>
       
            <div class="dropdown-content">
                
                <a href="bookApp.php"><b><i>Book Appointment</i></b></a>
                <a href="donationR.php"><b><i>View Appointments Booked</i></b></a>
                <a href="donationC.php"><b><i>View Donation Centers</i></b></a>
                
            </div>
        </li>
        <?php endif; ?>
    </ul>
</div>
    
</body>

</html>
