<?php

$link1=mysql_connect("localhost","root","");
mysql_select_db("ems",$link1);

?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="files/images/logo.ico" type="image/x-icon" /> 
<title>AAI</title>
<link href="files/sign_up2.css" type="text/css" rel="stylesheet" media="all">
</head>

<body align="center">


<div id="main" style="color:#1F618D; height:60%; float:left" align="center">
     <div id="header">
	 <a href="homepage.html">
	 <h1>AAI</h1>
	 </a>
	 </div>
	 
	 
	 <div id="content" style="font-size:120%; margin-top:10%; margin-left:3%;" align="left">Congratulations on becoming an Employee of Airports Authority of India.</div>
	 
	 <div id="content" style="font-size:120%; margin-top:5%; margin-left:3%;" align="left">Your Employee ID is  <?php error_reporting(0); $mobile=$_GET['m']; $query="select E_ID from tbl_signup where mobile_no='$mobile'"; $row=mysql_query($query); $m=mysql_fetch_array($row); echo $m['E_ID']; ?> <br> Remember this along with the password you entered to login. </div>
	
	 
	 
	 
	 
	 <div class="login" style="margin-top:10%;" align="center">
	 
	     <a href="http://localhost/aai/login.php"><button class="button"><span>Login</span></button></a>
	 
	 </div>
	 
	 
	 
</div>



</body>
</html>	 