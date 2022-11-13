<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: nlogin.php');
	exit;
}
$email=$_SESSION['email'];
$mysqli = require __DIR__ . "/database.php";   
$sql="select * from bookapp where (email='$email');";;
$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_row($result);
if (!empty($singleRow)) {
    header('Location: booked.php');
    exit;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$email= $_SESSION['email'];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$Weight = $_POST["Weight"];
$bloodType = $_POST["bloodType"];
$travel = $_POST["travel"];
$diseases = $_POST["diseases"];
$comments = $_POST["comments"];
$info = $_POST["info"];
$donations = $_POST["donations"];
$location = $_POST["location"];
$day= $_POST["day"];
$month = $_POST["month"];
$time = $_POST["time"];

$is_invalidP = true;
$is_invalidAp = true; 
$is_invalidAn = true; 
$is_invalidW = true; 
$is_invalidT = true; 
$is_invalidD= true;
$is_invalidI= true;
$is_invalidDo= true;

if (is_numeric($phone) AND  strlen($phone) == 10)
{
    $is_invalidP = false;
}
if (is_numeric($age))
{
    $is_invalidAn = false;
}

if ($age>=17)
{
    $is_invalidAp = false;
}
if (is_numeric($Weight))
{
    $is_invalidW = false; 
}
if(empty($travel) ){
    $is_invalidT = false;

} 
if(empty($diseases) ){
    $is_invalidD = false;

} 
if(empty($info) ){
    $is_invalidI= false;

} 
if(empty($donations) ){

    $is_invalidDo= false;

} 



$mysqli = require __DIR__ . "/database.php";         
        
$sql = "INSERT INTO bookapp (email,fName, lName, phone, age, Weight, bloodType, travel, diseases, comments, info, donations, location, day, month,time)
VALUES (?,?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $mysqli->stmt_init();
if ( ! $stmt->prepare($sql)) {
    
    die("SQL error: " . $mysqli->error);
}

if (!$is_invalidP AND !$is_invalidAn AND !$is_invalidAp AND !$is_invalidW AND $is_invalidT AND $is_invalidD AND $is_invalidI AND $is_invalidDo)
{
    
    $_SESSION['booked'] = TRUE;
    $_SESSION['fName'] = $fName;
    $_SESSION['lName'] = $lName;
    $_SESSION['phone'] = $phone;
    $_SESSION['age'] =  $age;
    $_SESSION['Weight'] = $Weight;
    $_SESSION['bloodType'] = $bloodType;
    $_SESSION['travel'] = $travel;
    $_SESSION['diseases'] = $diseases;
    $_SESSION['commments'] = $comments;
    $_SESSION['info'] = $info;
    $_SESSION['donations'] = $donations;
    $_SESSION['location'] = $location;
    $_SESSION['day'] = $day;
    $_SESSION['month']= $month;
    $_SESSION['time'] = $time;
$stmt->bind_param("sssiiissssssssss",
                       $email,
                       $fName,
                       $lName,
                       $phone,
                       $age,
                       $Weight,
                       $bloodType,
                       $travel,
                       $diseases,
                       $comments,
                       $info,
                       $donations,
                       $location,
                       $day,
                       $month,
                       $time,
                       );
                       

                               
                       if ($stmt->execute()) {
                        
                        header("Location: bookApp-success.php");
                        exit;
                        
                    } else {
                        
                        if ($mysqli->errno === 1062) {
                            die("Pleases enter information correctly.");
                        } else {
                            die($mysqli->error . " " . $mysqli->errno);
                        }
                    }
                
}


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
     .rightt{
    float: right;
    display: inline-block;
     }
     .rightc{
    float: right;
    display: inline-block;
     }
     


    </style>
    <title>Book Appointment</title>
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
    <br>


    <!--Start div for the form-->
    <div class="pages" id="form">
        <!--form header-->
        <h1>Book An Appointment</h1>
        <p><span class="star">*</span>Required information</p>
        <form name="BookApp" id="BookApp" method="post" onsubmit="required()">
            <!--first fieldset-->
            <fieldset id="contact">
                <!--name of the fieldset-->
                <legend>Contact Information</legend>
                <!--fieldset body-->
                <label class="blockLabel">
                    First Name<span class="star">*</span>
                    <input type="text" id="fName" name="fName" required />
                </label>
                <label class="blockLabel">
                    Last Name<span class="star">*</span>
                    <input type="text" id="lName" name="lName" required/>
                </label>
                <label class="blockLabel">
                    Phone<span class="star">*</span>
                    <input type="text" id="phone" name="phone" maxlength="10" required/> 
                </label>
             
    <?php if ($is_invalidP AND !empty($phone)): ?>
        <em style="color: red ; font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            Please enter phone number correctly<br>
            </b></em>
            
    <?php endif; ?>

            </fieldset>

            <!--second fieldset-->
            <fieldset id="personal">
                <!--name of the fieldset-->
                <legend>Personal Information</legend>
                <!--fieldset body-->
                <label class="blockLabel">
                    Age<span class="star">*</span>
                    <input type="text" id="age" name="age" required/>
                </label>
                <?php if ($is_invalidAn AND !empty($age)): ?>
        <em style="color: red ; font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            Please enter age correctly(numerical value)<br>
            </b></em>
            <?php endif; ?>
            <?php if ($is_invalidAp AND !empty($age)): ?>
        <em style="color: red ; font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Sorry, Donor must be above 17 according to Saudi Regulations<br>
            </b></em>

            
    <?php endif; ?>

            
    
    

                <label class="blockLabel">
                    Weight (in Kg)<span class="star">*</span>
                    <input type="text" id="Weight" name="Weight"required />
                </label>
                <?php if ($is_invalidW AND !empty($Weight)): ?>
        <em style="color: red ; font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Please enter weight correctly (numerical value)<br>
            </b></em>
 <?php endif; ?>

                <label class="blockLabel">
                    Blood Type<span class="star">*</span>
                    <select id="bloodType" name="bloodType">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </label>

                <label class="blockLabel2">
                    <input type="checkbox" id="travel" name="travel" value="No" required/>
                    <span class="star">*</span>I did not leave Saudi Arabia for the last 3 months
                    
                </label>
                
           

                <label class="blockLabel2">
                    Do you suffer from any chronic diseases?<span class="star">*</span>
                    <input type="radio" id="Yes" name="diseases" value="Yes"/>
                    <label for="yes">Yes</label>
                    <input type="radio" id="No" name="diseases" value="No" />
                    <label for="no">No</label><br>
                </label>

                <textarea id="comments" name="comments" rows="5" cols="40" placeholder="If yes, please mention them here."></textarea>

                <label class="blockLabel2">
                    <input type="checkbox" id="info" name="info" value="Declare"  required/>
                    <span class="star">*</span>I declare that the information above is true.
                    
                    
                </label>

            </fieldset>

            <!--third fieldset-->
            <fieldset id="appointment">
                <!--name of the fieldset-->
                <legend>Appointment Information</legend>
                <!--fieldset body-->
                <label class="blockLabel2">
                    Donation Type <span class="star">*</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="whole" name="donations" value="Whole Blood"/>
                        Whole Blood
                    

                   
                        <input type="radio" id="platelet" name="donations" value="Platelet"/>
                        Platelet
                    
                </label>

                <label class="blockLabel">
                    Donation Location<span class="star">*</span>
                    <select id="location" name="location">
                        <optgroup label="Jeddah">
                            <option value="KAU Hospital">KAU Hospital</option>
                            <option value="Saudi German Hospital">Saudi German Hospital</option>
                            <option value="International Medical Center">International Medical Center</option>
                        </optgroup>

                        <optgroup label="Riyadh">
                            <option value="Hayat National Hospital">Hayat National Hospital</option>
                            <option value="Green Crescent Hospital">Green Crescent Hospital</option>
                        </optgroup>

                        <optgroup label="Dammam">
                            <option value="Dammam Medical Complex">Dammam Medical Complex</option>
                        </optgroup>
                    </select>

                </label>
                <label class="blockLabel">
                    Date<span class="star">*</span>
                    <select id="day" name="day">
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                        <option value="7th">7th</option>
                        <option value="8th">8th</option>
                        <option value="9th">9th</option>
                        <option value="10th">10th</option>
                        <option value="11th">11th</option>
                        <option value="12th">12th</option>
                        <option value="13th">13th</option>
                        <option value="14th">14th</option>
                        <option value="15th">15th</option>
                        <option value="16th">16th</option>
                        <option value="17th">17th</option>
                        <option value="18th">18th</option>
                        <option value="19th">19th</option>
                        <option value="20th">20th</option>
                        <option value="21st">21st</option>
                        <option value="22nd">22nd</option>
                        <option value="23rd">23rd</option>
                        <option value="24th">24th</option>
                        <option value="25th">25th</option>
                        <option value="26th">26th</option>
                        <option value="27th">27th</option>
                        <option value="28th">28th</option>
                        <option value="29th">29th</option>
                        <option value="30th">30th</option>
                        <option value="31st">31st</option>
                    </select>
                    <select id="month" name="month">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </label>
                <label class="blockLabel">
                    Time<span class="star">*</span>
                    <select id="time" name="time">
                        <option value="8:00AM">8:00AM</option>
                        <option value="9:00AM">9:00AM</option>
                        <option value="10:00AM">10:00AM</option>
                        <option value="11:00AM">11:00AM</option>
                        <option value="12:00PM">12:00PM</option>
                        <option value="1:00PM">1:00PM</option>
                        <option value="2:00PM">2:00PM</option>
                        <option value="3:00PM">3:00PM</option>
                        <option value="4:00PM<">4:00PM</option>
                        <option value="5:00PM<">5:00PM</option>
                    </select>
                </label>
                <br>
                
    <br>

            </fieldset>
            
            <br>
            <!--submit button-->
            <button name="book" id="book" type="submit">
                Book Appointment
            </button>
            <!--clear information button-->
            <button name="clear" id="clear" type="reset">
                Clear Information
            </button>

            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </form>
    </div>
</body>

</html>
