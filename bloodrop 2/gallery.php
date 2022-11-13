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
    <title>Bloodrop</title>
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

    <!--print the title of page-->
    <div class="pages">
        <h1><i>Volunteers on the job</i></h1>
        <a style="font-size: 20px; font-color: gray">Click on an image to expand it</a>
        <br><br>
    </div>
    
    <!-- four columns for small pictures -->
    <div class="rowG">
        <span class="columnG">
            <img src="../images/G1.png" alt="" width="95%" height="100%" onclick="myFunction(this);">
</span>
        <span class="columnG">
            <img src="../images/G2.png" alt="" width="95%" height="100%" onclick="myFunction(this);">
</span>
        <span class="columnG">
            <img src="../images/G3.png" alt="" width="95%" height="100%" onclick="myFunction(this);">
</span>
        <span class="columnG">
            <img src="../images/G4.png" alt="" width="95%" height="100%" onclick="myFunction(this);">
</span>
    </div>
    <!--display the big picture-->
    <div class="containerG">
        <span onclick="this.parentElement.style.display='none'" class="closebtnG">&times;</span>
        <img id="expandedImg" width="100%">
        <div id="imgtext"></div>
    </div>
    <script src="gallery.js"></script>

</body>

</html>
