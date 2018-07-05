<?php
error_reporting(0);
$link=mysql_connect("localhost","root","");
mysql_select_db("ems",$link);

session_start();
?>




<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="shortcut icon" href="files/images/logo.ico" type="image/x-icon" /> 
<title>AAI</title>
<link href="files/login.css" type="text/css" rel="stylesheet" media="all">
</head>

<body align="center">
<div id="first">

<div id="top">
    <a href="homepage.html">
    <div id="left">
    <img src="files/images/Airports_Authority_of_India_logo.svg.png" height="100%">
    </div>
	</a>
	
	<a href="homepage.html">
	<div id="right" align="left">
	Airports Authority of India
	</div>
	</a>
</div>


<!--****************************************************************************************************************
                                                Login Form                                                        
*****************************************************************************************************************-->


<!--<form method="post" enctype="multipart/form-data">
<div id="main_left1" align="center">
     <div id="header">
	  <h1>AAI</h1>
	 </div>
	 
	 <div class="input"><label for="username"><input type="text" name="e_id" id="username" placeholder="Employee Id" required></label></div>
	 <div class="input"><label for="password"><input type="password" name="pass" id="password" placeholder="Password" required></label></div>
	 <div><button class="button" type="submit" name="sub"><span><b>Login</b></span></button></div>
	 <div id="footer"><a href="sign_up.php">Not Signed Up?</a></div>
	 
	 
</div>
</form>-->
<?php

     
     
	 
	 
if(isset($_POST['sub']))
{
     $id=$_POST['e_id'];
     $password=$_POST['pass'];
	 $_SESSION['id']=$id;
	 $_SESSION['ps']=$password;
	 $query="select * from tbl_signup where E_ID='$id' and binary password='$password'";
     $row=mysql_query($query);
	 $sql=mysql_fetch_array($row);
	 if($sql>0)
	 {
		 /*header('location:home_page.php');*/
         echo"<script>alert('Successful');</script>";
	 }
	 else
	 {   
        echo"<script>alert('Wrong Username or Password');</script>";
	 }
	 

}

?>



<!--*********************************************************************************************************
                                             Main Right                                                      
**********************************************************************************************************-->

<div id="main_right">

<a href="http://localhost/aai/serving_employees.html">
<div class="cont" style="background-color:#239B56;">
<div class="container">
  <img src="files/images/telephone-operator.png" alt="image" class="image">
  <div class="overlay" align="left">
    <div class="text" style="color:#239B56;">Serving <br> Employees</div>
  </div>
</div>
</div>
</a>


<a href="retired_employees.html">
<div class="cont" style="background-color:#C0392B;">
<div class="container">
  <img src="files/images/retirement.png" alt="image" class="image">
  <div class="overlay" align="left">
    <div class="text" style="color:#A93226;">Retired <br> Employees</div>
  </div>
</div>
</div>
</a>


<a href="#">
<div class="cont" style="background-color:#2980B9;">
<div class="container">
  <img src="files/images/document.png" alt="image" class="image">
  <div class="overlay" align="left">
    <div class="text" style="color:#2980B9;">Technical <br> Instructions <br> and <br> Circulars</div>
  </div>
</div>
</div>
</a>


<a href="http://localhost/aai/standard_forms.html">
<div class="cont" style="background-color:#D35400;">
<div class="container">
  <img src="files/images/clipboard-with-list.png" alt="image" class="image">
  <div class="overlay" align="left">
    <div class="text" style="color:#D35400;">Standard <br> Forms</div>
  </div>
</div>
</div>
</a>



</div>

<!--********************************************************************************************************************
                                                 Footer
*********************************************************************************************************************-->

<div id="footer2" style="width:69%;">
    <div id="left2" align="left">
	<b>
	Corporate Office : <br>
    Airports Authority of India, Rajiv Gandhi Bhawan, <br>
    Safdarjung Airport, New Delhi-110003 Ph : 91-11-24632950
	</b>
	</div>

	<div id="right2" align="right">
	<a href="files/documents/AAI_Terms_Conditions.pdf" style="color:#283747;"><b>Terms and Conditions</b></a>&nbsp|&nbsp
	<a href="http://localhost/aai/disclaimer.html" style="color:#283747;"><b>Disclaimer</b></a>&nbsp|&nbsp
	<a href="files/documents/AAI_Privacy_Policy.pdf" style="color:#283747;"><b>Privacy Policy</b></a>
	
	</div>
</div>

</div>
</body>
</html>