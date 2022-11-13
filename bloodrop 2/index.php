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
    .image {
  margin: 0;
  width: 20px;
  height: 20px;


}

    </style>
    <title>Bloodrop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>


<body>
<?php include('navbar.php'); ?>
    <br><br>
    <!--usage of grid containers using css to position items easier-->
    <div class="grid-container">
        <div class="item1"></div>
        <!--uploading logo at certain wodth and height position is at 2 which equals center-->
        <div class="item2"><img src="../images/logo.PNG"  alt="" width="400" height="290" /></div>

        <div class="item3"></div>
        <div class="item4">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="boxed"><br><br>
            <!--usage of borders using css, borders and margins colored grey-->
            <font size="+3"><b>About Us</b></font>
            <font size="+2">
                <p align="center"><br><cite>Bloodrop's</cite> main goal is to ease the process of
                    donating blood where it is crucial to save a person's
                    life. A user may signup and log information such as blood type, age, etc to help a person in
                    need. Maintaining
                    diversity in the blood supply is essential. Some blood types are quite rare and are likeliest to be
                    found among people with shared
                    ancestral origins.
                    Donating blood will aid cancer
                    patients and people dealing with likewise diseases.
                    <br>
                <p><br>
            </font>
        </div>
        <div class="item6">
            <!--usage of white spaces-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="item7"></div>
        <div class="item8">
            <br><br><br><br>
            <font size="+3"><b style="color:#808080">&nbsp;&nbsp;Benefits of blood donating include</b></font> 
            <br><br><br>
        </div>
        <div class="item9"></div>
        <div class="item10"></div>
        <!--uploading photos for benefits with certain width, height, and horizontal space-->
        <div class="item11"><img src="../images/decrease.png"  alt="" width="210" height="210"
                hspace="110" />
            <img src="../images/save.png"  alt="" width="200" height="200" hspace="110" />
            <img src="../images/heart.png"  alt="" width="220" height="220" hspace="110" />
        </div>
        <div class="item12"></div>
        <div class="item13"></div>
        <!--adding feartures position: center at item 13-->
    </div>

</body>

</html>