<?php

session_start();
$regno=$_SESSION["regno"];
$pword=$_SESSION["pword"];
$dept=$_SESSION["dept"];
$_SESSION["pword"]=$pword;
$_SESSION["regno"]=$regno;
$_SESSION["dept"]=$dept;

if($regno && $pword)
{
	echo "session valid";
}
else{
    echo "session doesn't valid";
}
echo $pword;
echo $regno;	
?>
<html>
<head>
	<title>Bootstrap Hide Show Password</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
	</head>
<body class="main">

		<header>

<nav class="navbar navbar" id="nav">
  <div class="container-fluid" id="mmm">
    <div class="navbar-header">
      <button type="button " class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div>
      <a class="navbar-brand" id="img"> <img src="img\logo.png" id="img1"></a>
    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active">
          <div class="text">
          <h1 id="text2" align="center">Feed Back </h1>
        </div>
      </li>
      </div>
  
</nav>
</header>


<div class="col-sm-12" id="main">
	<div class="col-sm-8">
		<div class="div" id="mm">
	<form action="password1.php" method="POST">
		
		<div class="form-group">
			<label>Old Password:</label>
			<input type="password" id="password" name="oword" class="form-control" data-toggle="password" required="text">
		</div>
		<div class="form-group">
			<label>New Password:</label>
			<input type="password" id="password" name="npass" class="form-control" data-toggle="password" required="text">
		</div>
		<div class="form-group">
			<label>Confirm Password:</label>
			<input type="password" id="password" name="cpass" class="form-control" data-toggle="password" required="text">
		</div>
		<div>
		<div class="row" id="bbtn">
			<div class="col-sm-4">
			<button class="btn btn-success" id="btn1">SAVE</button>
		</div>
	</form>
		<div class="col-sm-4">
			<button class="btn btn-success" id="btn2" onclick="location.href = 'landing.php';">BACK</button>
		</div>
	</div>
	</div>
</div>
</div>
</div>


<script type="text/javascript">
	$("#password").password('toggle');
</script>
<script>
function myFunction() {
  document.getElementById("btn2").innerHTML ="landing.html";
}
</script>


</body>
</html>

<style>

#password
{
	box-shadow: 0px 0px 1px black;
}
#main
{
    margin-top:8%;
    padding-left: 20%;
    padding-right:20%;
    padding-top:5%;
    padding-bottom:5%;
    

}

.div
{
	background-color:green;
	padding:5%;
	border-radius:5px;
	margin-left:30%;

}
#btn2
{
	margin-left:30%;
	margin-top:5%;
	background-color:green;
}
#btn1
{
	margin-left: 30%;
	background-color:green;
}
#myNavbar{
  text-align: center;
}
#text2{
  font-family: Bookman;
  font-style: inherit;
  font-size: 34px;
  text-shadow: 0px 1px 2px black;
  color:green;

}
#nav
{
  box-shadow: 0px 1px 3px green;
 padding: 20px; 
 background-color:yellow;
 border:none;  
}
.navbar-toggle
{
  background-color:yellow;
  box-shadow: 0px 1px 3px green;
  width: 30px;
  height: 30px;
}
#img1
{
  margin-left:-27%;
  margin-top:-27%;
  
  position: relative;

}
#btn
{
  color:#fff;
}
.text1
{
	color:black;
}
#mm
{
	background-color:#e8f442;
	box-shadow: 0px 0px 5px green;
}
#bbtn
{
	margin-left:5%;
}
.main
{
	background-color:;
}