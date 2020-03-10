<?php
session_start();
$regno=$_SESSION["regno"];
$pword=$_SESSION["pword"];
$dept=$_SESSION["dept"];

$_SESSION["regno"]=$regno;
$_SESSION["dept"]=$dept;
if($regno && $pword  )
{
	echo "session valid";
}
else{
    echo "session doesn't valid";
}
echo $dept;
echo $pword;

	
?>




<?php
$dept=$_SESSION["dept"];
$oword=$_POST['oword'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
$tables=array("student_cse","student_ece","student_eee","student_mech","student_civil","student_snh");
$len=sizeof($tables);


echo $dept;

$servername = "localhost";
$username = "root";
$password = "";


$con = mysql_connect($servername, $username, $password);
if($con){
	echo "connected";
}


$db=mysql_select_db("dept_details",$con)or die(mysql_error());
if($db){
	echo "db";
}

if($oword==$_SESSION["pword"])
{
	echo "connected oword";
	if($npass==$cpass && $dept=="cse")
	{
		echo "connected password of cse </br>";
		$str="update student_cse set pword='$npass' where regno='$regno' AND pword='$oword' ";
		if($str)
		{
		echo	"connected cse";
		}
	}
	if($npass==$cpass && $dept=="ece")
	{
		echo "connected password of ece </br>";
		$str="update student_ece set pword='$npass' where regno='$regno' AND pword='$oword' ";
		if($str)
		{
		echo	"connected cse";
		}
	}
	if($npass==$cpass && $dept=="eee")
	{
		echo "connected password of eee </br>";
		$str="update student_eee set pword='$npass' where regno='$regno' AND pword='$oword' ";
		if($str)
		{
		echo	"connected ece";
		}
	}
	if($npass==$cpass && $dept=="civil")
	{
		echo "connected password of civil </br>";
		$str="update student_civil set pword='$npass' where regno='$regno' AND pword='$oword' ";
		if($str)
		{
		echo	"connected civil";
		}
	}
	if($npass==$cpass && $dept=="mech")
	{
		echo "connected password of mech </br>";
		$str="update student_mech set pword='$npass' where regno='$regno' AND pword='$oword' ";
		if($str)
		{
		echo	"connected mech";
		}
	}
	if($npass==$cpass && $dept=="snh")
	{
		echo "connected password of snh </br>";
		$str="update student_snh set pword='$npass' where regno='$regno' AND pword='$oword' ";
		if($str)
		{
		echo	"connected snh";
		}
	}



$result=mysql_query($str,$con);
if($result)
{
	echo "connected result";
}


if($result) { 
echo "<script type=\"text/javascript\">window.alert('successfully password changed');
window.location.href = 'password.php';</script>"; }
else{
echo "<script type=\"text/javascript\">window.alert('invalid password');
window.location.href = 'password.php';</script>"; 
}

}
else{
	echo "<script type=\"text/javascript\">window.alert('invalid oldpassword');
window.location.href = 'password.php';</script>"; }



?>