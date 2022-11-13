<?php

session_start();
$email=$_SESSION['email'];
$mysqli = require __DIR__ . "/database.php";   
$sql="select * from bookapp where (email='$email');";;
$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_row($result);

if (!empty($singleRow)) {
$fName = $singleRow['1'];
$lName =  $singleRow['2'];
$phone =  $singleRow['3'];
$age =  $singleRow['4'];
$Weight =  $singleRow['5'];
$bloodType =  $singleRow['6'];
$travel =  $singleRow['7'];
$diseases =  $singleRow['8'];
$comments =  $singleRow['9'];
$info =  $singleRow['10'];
$donations =  $singleRow['11'];
$location =  $singleRow['12'];
$day=  $singleRow['13'];
$month = $singleRow['14'];
$time = $singleRow['15'];
$infos=true;
    
}else {
    $infos=false;
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
    float: right; 
}
.centerr {
  margin-left: auto;
  margin-right: auto;
}


    </style>
    <title>Bloodrop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css">
    <link rel="stylesheet" href="../CSS/style2.css" /> 
    

</head>


<body>
   
    <!--use of a navigation bar that is fixed on top using ul's, bold, italic, and change of font size-->
    <?php include('navbar.php'); ?>
    
<br><br><br><br>
    <div class="container"> 
            <!--uploading logo-->
            <br><br>
        <img src="../images/logo.PNG" alt="" width="230" height="175" /><br><br>
        <?php if (!$infos): ?>
            <br>
            <b style="color: rgb(162, 161, 161); font-size: 24px;"> No appointments for this email<br>(<?php echo $_SESSION['email']; ?>)
            <br><br><br><br>
            <?php endif; ?>

        <?php if ($infos): ?>    
       
        <table class ="centerr" style="width:80%">
      <tr>
        <th colspan="2"><b style="color: rgb(162, 161, 161); font-size: 25px; vertical-align: middle;"> <br><?php echo  $fName; ?>'s Appointment Details </b> <h2></h2></th>
      
        </tr>
       
        <tr>
          <td height="30" style="text-align: left; vertical-align: middle;">First Name</td>
          <td height="30" style="text-align: left; vertical-align: middle;"><?php echo  $fName; ?></td>
         </tr>

        <tr>
          <td height="30" style="text-align: left; vertical-align: middle;">Last Name</td>
          <td height="30" style="text-align: left; vertical-align: middle;"><?php echo  $lName; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Age</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $age; ?> years old</td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Weight</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $Weight; ?> Kgs</td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Blood type</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $bloodType; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Traveled (Outside of KSA)</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $travel; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Acquire a chronic disease</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $diseases; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Type of chronic disease</td>
          <td height="30"style="text-align: left; vertical-align: middle;"> <?php echo  $comments; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Declaration of trueness of information</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $info; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Type of blood donation</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $donations; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Location of appointment</td>
          <td height="30"style="text-align: left; vertical-align: middle;"><?php echo  $location; ?></td>
        </tr>

        <tr>
          <td height="30"style="text-align: left; vertical-align: middle;">Date of appointment</td>
          <td height="30"style="text-align: left; vertical-align: middle;">The <?php echo  $day; ?>&nbsp;of <?php echo  $month; ?>&nbsp;at <?php echo  $time; ?></td>
        </tr>


      </table>
      <?php endif; ?>

      <br>
      <br>
        </div>   
   <br><br>

</body>

</html>