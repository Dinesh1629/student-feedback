<?php
session_start();
$regno=$_SESSION["regno"];
$pword=$_SESSION["pword"];
$dept=$_SESSION["dept"];
$v3=$_SESSION["sem"];
$v5=$_SESSION["year"];
$v2=$_SESSION["name"];
$_SESSION["name"]=$v2;
$_SESSION["pword"]=$pword;
$_SESSION["regno"]=$regno;
$_SESSION["dept"]=$dept;
$_SESSION["sem"]=$v3;
$_SESSION["year"]=$v5;
if($regno && $pword)
{
	echo "session valid";
}
else{
    echo "session doesnot valid";
}
echo $pword;	

?>
<?php


$regno=$_SESSION["regno"];
$dept=$_SESSION["dept"];
$v5=$_SESSION["year"];
$v2=$_SESSION["sem"];
echo $v5;
echo $v2;


$servername = "localhost";
$username = "root";
$password = "";
echo $regno;
echo $dept;


$con = mysql_connect($servername, $username, $password);
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
	}
	//echo "connection successful";
 $db=mysql_select_db("dept_details",$con)or die(mysql_error());

if($dept=="cse"){
	echo "strcse";
$str="select  *from subdetails_cse where  year='$v5' and sem='$v3'";
}
elseif($dept=="ece")
{
echo "strece";
$str="select  *from subdetails_ece where  year='$v5' and sem='$v3'";
}
elseif($dept=="eee")
{
echo "streee";
$str="select  *from subdetails_eee where  year='$v5' and sem='$v3'";
}
elseif($dept=="civil")
{
echo "strcivil";
$str="select  *from subdetails_civil where  year='$v5' and sem='$v3'";
}
elseif($dept=="mech")
{
echo "strmech";
$str="select  *from subdetails_mech where  year='$v5' and sem='$v3'";
}
elseif($dept=="snh")
{
echo "strsnh";
$str="select  *from subdetails_snh where  year='$year' and sem='$sem'";
}

$result = mysql_query($str,$con);
if($result)
{
  echo "connected result";
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/feedback.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<body>
 <nav class="navbar navbar" id="nav">
  <div class="container-fluid" >
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
          <h1 id="text2">Feed Back</h1>
        </div>
      </li>
      </div>
  
</nav>

 	<div class="container" id="main">
   <form method="post"action="feedback1.php">
		<div class="col-sm-12" id="center">
      <div class="row" id="r1">
      <div class="col-sm-2 col-xs-5">
        <p><strong>Staff Name:</strong></p>
      </div>
      <div>
        <select id="tt1" name="subname" required="text">
          <option ></option>
		
    <?php

    while($row=mysql_fetch_assoc($result))
  {
      echo "connected while";
      $v1=$row['staffname'];
      $sub=$row['subname'];
      $conn=$v1."-".$sub;
     echo $sub;
     $_SESSION["subname"]=$sub;
    
?>
<option><?php echo $conn;?></option>

<?php
}
?>
		         </select>
          
      </div>
      </div>
        <div class="form-group" >
            <label for="comment" id="tt">Comment:</label>
           <textarea class="form-control" name="feedback" rows="10" id="comment" required="text"></textarea>
        </div>
    
        <div class="row" id="button">
          <div class="col-sm-4">
             <button type="submit" class="btn btn-success" id="btn3">Submit</button>
           </div>
         </form>
          <div class="col-sm-4">
          <button type="button" class="btn btn-success" id="btn3"  onclick="location.href = 'landing.php';"> Back</button>
           
          </div>
          
        </div>
        </div>


			</div>		
		</div>
	</div>

</body>
<script type="js/bootstrap.min.js"></script>
<script type="js/jquery.min.js"></script>
<script>
function myFunction() {
  document.getElementById("btn3").innerHTML ="landing.html";
}
</script>


</html>
