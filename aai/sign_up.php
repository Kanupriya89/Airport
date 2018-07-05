<?php

$link1=mysql_connect("localhost","root","");
mysql_select_db("ems",$link1);




?>



<html>
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""><link rel="shortcut icon" href="files/images/logo.ico" type="image/x-icon" /> 
<title>AAI</title>
<link href="files/sign_up.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="files/w3.css">

<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
</head>

<body align="center" >

<div id="top">
    <div id="left">
    <img src="files/images/Airports_Authority_of_India_logo.svg.png" height="100%">
    </div>
	<div id="right" align="left">
	
	Airports Authority of India
	
	</div>
</div>

<!--*************************************************************************************************************-->
<!--                                               Slideshow                                                     -->
<!--*************************************************************************************************************-->

<div id="main_left1">
<div class="w3-content w3-display-container" style="max-width:100%">
  <a href="http://www.thehindu.com/business/centre-extends-operating-period-for-two-airports/article19136589.ece"><img class="mySlides" src="files/images/delhi-airport-pti.jpg" style="width:100%; height:100%;"></a>
  <a href="http://economictimes.indiatimes.com/industry/transportation/airlines-/-aviation/aai-ropes-in-tata-elxsi-to-design-it-guidelines-for-airports/articleshow/59266562.cms"><img class="mySlides" src="files/images/aai-bccl.jpg" style="width:100%; height:100%"></a>
  <a href="http://economictimes.indiatimes.com/markets/stocks/earnings/aai-annual-profit-surges-23-to-rs-3115-crore/articleshow/59038880.cms"><img class="mySlides" src="files/images/aai-annual-profit-surges-23-to-rs-3115-crore.jpg" style="width:100%; height:100%;"></a>
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

	

</script>


<!--*************************************************************************************************************-->
<!--                                              SIGN UP FORM                                                   -->
<!--*************************************************************************************************************-->
<form method="post" enctype="multipart/form-data">
<div id="main">
     
     <div id="header">
	  <h1>Sign Up</h1>
	 </div>
	 
	 
	 
	 <div class="input"><label for="username"><input type="text" name="fname" id="username" placeholder="First Name" required></label></div>
	 <div class="input"><label for="username"><input type="text" name="lname" id="username" placeholder="Last Name" required></label></div>
	 <div class="input"><label for="password"><input type="password" name="password" id="password" placeholder="Password" required></label></div>
	 <div class="input"><label for="repassword"><input type="password" name="repassword" id="repassword" placeholder="Re Type Password" required></label></div>
	 <div class="input"><label for="email"><input type="email" name="email" id="email" placeholder="Email" required></label></div>
	 <div id="gender">Male&nbsp<input type="radio" name="gender" value="Male" checked>&nbsp&nbsp&nbsp&nbspFemale&nbsp<input type="radio" name="gender" value="Female"></div>
	 <div class="input" id="dob"><label for="dob"><input type="date" name="dob" id="dob" placeholder="Date Of Birth" required></label></div>
	 <div class="input"><label for="mobile"><input type="text" name="mobile" id="mobile" placeholder="Mobile No" required></label></div>
	 <div class="input"><a href="#" onclick="this.form.submit()"><button class="button" name="sub"><span><b>Sign Up</b></span></button></a></div>
     <div id="footer" align="center"><a href="login.php">Already an Employee?</a></div>
	 
</div>
</form>
<?php

if(isset($_POST['sub']))
{
     $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
     $password=$_POST['password'];
	 $repassword=$_POST['repassword'];
	 $email=$_POST['email'];
	 $dob=$_POST['dob'];
	 $mobile=$_POST['mobile'];
	 
	 $gender=$_POST['gender'];
	 
	 
	 
         if(strcmp($password,$repassword)!=0)
	        {
		      echo "<script>alert('Passwords Dont match');</script>";
		      //header('location:http://localhost/youth_club_2/sign_up.php');
	        }
	     else
	        {
              $query="insert into tbl_signup set fname='$fname',lname='$lname',password='$password',email='$email',dob='$dob',mobile_no='$mobile',gender='$gender'";
              $row1=mysql_query($query,$link1);
			  header('location:http://localhost/aai/sign_up_ok.php?m='.$mobile);
			  
	        }
			
			
			
	 
	 
}

?>


</body>
</html>	 


