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
    <title>Resume</title>
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

    <div class="pages">
        <h1>Website Devolepers' Resumes</h1>
        <object id="myPdf" type="application/pdf" data="../txt/LuluahAldakhil_CVC.pdf" width="100%" height="930px">
            Unable to open the PDF file.
        </object>
        <object id="myPdf" type="application/pdf" data="../txt/CV.pdf" width="100%" height="850px">
            Unable to open the PDF file.
        </object>
    </div>
    <br><br><br><br>
</body>

</html>
