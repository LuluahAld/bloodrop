function required()
{
var empt = document.forms["BookApp"]["fName"].value;
var empt2 = document.forms["BookApp"]["lName"].value;
var empt3 = document.forms["BookApp"]["phone"].value;
var empt4 = document.forms["BookApp"]["age"].value;
var empt5 = document.forms["BookApp"]["Weight"].value;
var empt6 = document.forms["BookApp"]["travel"].value;
var empt7 = document.forms["BookApp"]["diseases"].value;
var empt8 = document.forms["BookApp"]["info"].value;
var empt9 = document.forms["BookApp"]["donations"].value;

if (empt == "" || empt2=="" || empt3 == "" || empt4== "" || empt5 == ""|| empt6 == ""|| empt7 == ""|| empt8 == ""
|| empt9 == "")
{
alert("Some information is missing. Please refill the form");
return false;
}

 else {

    
}

}