

<!DOCTYPE html>

<?php

ini_set( "display_errors", 0);
?>



<html lang="en">
<head>
<script>
function validateForm()
{
var FirstName=document.forms["signupform"]["FirstName"].value;
var LastName=document.forms["signupform"]["LastName"].value;
var Email_ID=document.forms["signupform"]["Email_ID"].value;
var Password=document.forms["signupform"]["Password"].value;
var ConfirmPassword=document.forms["signupform"]["ConfirmPassword"].value;
var Mobile=document.forms["signupform"]["Mobile"].value;	  
var n=Email_ID.toLowerCase().includes("@nirmauni.ac.in");

if(n){
}
else{
	alert("Please register using Nirma Accounts only!");
	document.signupform.Email_ID.focus();
	return false;
}	  
if(Password != ConfirmPassword) {
	  alert("Passwords do not match..!!!");
  document.signupform.Password.focus();
  return false;
	  } 
  
	if(Password.length < 8) {
		  
		alert("Password must contain at least eight characters!");
        document.signupform.Password.focus();
        return false;
      }  

	//validation for Password  
	  
	
			if(Mobile.length==0) 
            {
                alert("Please enter Mobile Number");
                document.signupform.mobile.focus();
                return false;
            }
			
           if(isNaN(Mobile))
              {
                 alert("Enter numeric value");
				 document.signupform.mobile.focus();
                 return false; 
              }
			  
				  if (!(Mobile.length == 10)) { 
alert("The Mobile number is of wrong length. \nPlease enter 10 digit Mobile no."); 
document.signupform.mobile.focus();
return false; 
}    
}
</script>
<style>


img.a{
	height:200px;
	width:130px;
	box-shadow: 0 0 20px #bbbbbb;
	
}



div.book1{
	position:absolute;
	animation: moving 32s linear -4s infinite;
	
}

div.book2{
	position:absolute;
	animation: moving 32s linear -8s infinite;
	
}

div.book3{
	position:absolute;
	animation: moving 32s linear -12s infinite;
	
}


div.book4{
	position:absolute;
	animation: moving 32s linear -16s infinite;
	
}


div.book5{
	position:absolute;
	animation: moving 32s linear -20s infinite;
	
}


div.book6{
	position:absolute;
	animation: moving 32s linear -24s infinite;
	
}


div.book7{
	position:absolute;
	animation: moving 32s linear -28s infinite;
	
}

div.book8{
	position:absolute;
	animation: moving 32s linear -32s infinite;
	
}


@keyframes moving{
    from {
		top:1550px;
		left: 0%}
    to {
		top:1550px;
		left: 100%}
}

img.mySlides{
	opacity: 0.5;
	width:100%;
	height:680px;
	margin-top:0px;
}

h4.heading {	
	font-family: 'CoreCircus', sans-serif;
	text-transform: uppercase;
	font-size: 200px;
	text-align: center;
	line-height: 1;
	margin: 0;
	top: 400px;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;

	
}

h4.content {	
	font-family: 'CoreCircus', sans-serif;
	text-transform: uppercase;
	font-size: 50px;
	text-align: center;
	line-height: 1;
	margin: 0;
	top: 900px;
	left: 200px;
	position: absolute;
	
}
h4.content3 {	
	font-family: 'CoreCircus', sans-serif;
	text-transform: uppercase;
	font-size: 50px;
	text-align: center;
	line-height: 1;
	margin: 0;
	top: 1350px;
	left: 200px;
	position: absolute;
	
}

h4.content2 {	
	font-family: 'CoreCircus', sans-serif;
	font-size: 20px;
	text-align: center;
	line-height: 2;
	margin: 0;
	top: 1050px;
	left: 250px;
	position: absolute;
	color: gray;
	
}

h4.content4 {	
	font-family: 'CoreCircus', sans-serif;
	font-size: 20px;
	line-height: 1.5;
	margin: 0;
	position: absolute;
	color: gray;
	
}

/* Set a style for all buttons */


/* Center the image and position the close button */

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}



span.psw {
    float: right;
    padding-top: 16px;
}


.bac
{
	margin-top:-20px;
	
}

.footer_position

{
	position:absolute;
	top:3150px;
	width:100%
}
#myBtn {
position:absolute;
margin-left:45%;
  top:2850px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  padding: 15px;
  border-radius: 4px;
}



</style>
  <title>theElixir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
 	</script>
 	<link rel="stylesheet" type="text/css" href="css/index.css">
 	<script type= "text/javascript" src = "js/countries.js"></script>
 	<script src="js/check.js"></script>
  
  
  
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Welcome to theElixir.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="MainPage.php">Home</a></li>
		
        
		
		
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
		
					
		<!--<li><a href="#"><span class="glyphicon glyphicon-user"></span><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</a></li>-->
        
		
				
		<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Signup</button>
</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<h4 class="heading" contenteditable data-heading="Piece of Cake">The Elixir</h4>

 <div class="bac">

  <img class="mySlides" src="one.jpg">
  <img class="mySlides" src="two.jpg">
  <img class="mySlides" src="three.jpg">
</div>




<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}


var h1 = document.querySelector("h1");

h1.addEventListener("input", function() {
  this.setAttribute("data-heading", this.innerText);
});




// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

</script>











	<script>
function setURL(){
    document.getElementById('iframe').src = "group.php";
}
function setURL2(){
    document.getElementById('iframe').src = "area.php";
}
</script>


	<div style="margin-top:100px">
<form action=# method = "post">

      
        <div class="btn-group">
          
          <input type = "button"  value="Filter by Blood Group" name = "subject" class="btn btn-default"style = "font-size:25px; padding-left:250px; padding-right:250px;margin-left:50px" onclick="setURL()">
          <input type = "button" type="submit" value="Filter by City"  name = "subject"  class="btn btn-default" style = "font-size:25px;padding-left:250px; padding-right:250px;" onclick="setURL2()">
        </div>
 </form>

<div style="margin-left:30px">

	<iframe src="group.php" style = "width:100%; height:1000px;margin-top:30px;border-width:0px;" id="iframe"></iframe>



 
    
</div>
</div>








</body>
</html>
