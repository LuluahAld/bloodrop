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
    <title>Video</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
</head>

<body>
<?php include('navbar.php'); ?>
    <!--uploading logo-->
    <div class="logoPages">
        <img src="../images/logo.PNG" alt="" width="200" height="145" />
    </div>
    <br><br><br>
    <!--page title-->
    <div class="pages">
        <h1 style = "font-size: 30px;"><i>One donation can save as many as three lives</i></h1>
    </div>
    <br><br><br>

    <!--first video-->
    <div class="video">
        <!--title of the video-->
        <p>Why should a person donate blood?</p>
        <!--upbloading the video from YOUTUBE-->
        <iframe width="560" height="315"
        src="https://www.youtube.com/embed/VLoBCrHz2nQ"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay;
        clipboard-write; encrypted-media;
        gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
    <br><br><br>

    <!--second video-->
    <div class="video">
        <!--title of the video-->
        <p>Who can benefit from blood donations?</p>
        <!--upbloading the video from YOUTUBE-->
        <iframe width="560" height="315"
        src="https://www.youtube.com/embed/g40xbKDqTwI"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay;
        clipboard-write; encrypted-media;
        gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</body>

</html>