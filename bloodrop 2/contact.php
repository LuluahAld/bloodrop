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
<style>
    
  
 </style>
<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
    <link rel="stylesheet" href="../CSS/style2.css" />
</head>

<body>
    
    <!--use of a navigation bar that is fixed on top using ul's, bold, italic, and change of font size-->
    <?php include('navbar.php'); ?>
    <!--uploading logo-->
    <div class="logoPages">
        <img src="../images/logo.PNG" alt="" width="200" height="145" />
    </div>
    <br><br><br>


    <!--Start div for contact information-->
    <div class="pages">
        <h1>Find us here!</h1>

        <br><br>
        <!--Email buttons and link-->

        <br><br>
        
        <form action="https://formsubmit.co/443e12896ca15fe7038d0c90e1acc863"  method="POST">
            <fieldset >
                <br>
                <a style = "font-size: 25px;">Contact Information</a><br>
                <a>(We need your valid email in order to respond)</a><br><br>
                <input type="hidden" name="_next" value="https://bloo-drop.herokuapp.com/thanks.php">
                <input type="hidden" name="_captcha" value="false">
                
                 
                 <label for="nameC">Name</label>  <br> 
                 <input align="middle" style="width:80%;" type="text" name="nameC" id="nameC" placeholder="Enter name" ><br>
               
                 <label for="emailC">Email</label>  <br> 
                <input  align="middle"style="width:80%;" type="text" name="emailC" id="emailC" placeholder="Enter email" ><br>
                
                 <label for="messegeContact">Concern</label>  <br> 
                <input align="middle" style="width:80%;" height = "5000px" type="text" name="messegeContact" id="messegeContact" placeholder="Enter message" required>
                <br><br>
                <a href="thanks.php">
                <button type="submit" style = "font-size:23px;">Submit</button>
                </a>
                <br><br>
            </fieldset>
            
        </form>
        
            
        &nbsp;&nbsp;
        <br><br><br><br><br><br>
        <!--Add social media buttons and links-->
        <a style = "font-size: 25px;">Social Media</a><br>
        <br><br>
        <a href="https://twitter.com/SaudiMOH">
            <img src="../images/twitter.png" alt="Twitter" width="20%" height="10%" hspace="20" />
        </a>
        &nbsp;&nbsp;
        <a href="https://www.instagram.com/saudimoh/">
            <img src="../images/insta.png" alt="Instagram" width="20%" height="10%"  hspace="20" />
        </a>
        &nbsp;&nbsp;
        <a href="https://www.youtube.com/c/Saudimoh">
            <img src="../images/YouTube.png" alt="YouTube" width="20%" height="10%" hspace="20"/>
        </a>
        <br><br><br>
        <!--Add the application buttons and links-->
        <a style = "font-size: 25px;">Mobile Applications</a><br>
        <br><br>
        <a href="https://play.google.com/store/apps/details?id=com.lean.sehhaty">
            <img src="../images/googlePlay.png" alt="Google Play" width="20%" height="10%" hspace="70" />
        </a>
        &nbsp;&nbsp;
        <a href="https://apps.apple.com/sa/app/%D8%B5%D8%AD%D8%AA%D9%8A-sehhaty/id1459266578?l=ar">
            <img src="../images/appStore.png" alt="App Store" width="20%" height="10%"hspace="70" />
        </a>
    
    <br><br><br><br>
    <script src="../javascript/email.js"></script>
</div>
</body>

</html>
