<?php
session_start();
if(isset($_POST['regno']))
{
    $reg=$_POST['regno'];
	$pass=$_POST['pword'];
	$dept=$_POST['dept'];
    
	echo "<br>".$reg;
	echo "<br>".$pass;
	echo "<br>".$dept;

$servername = "localhost";
$username = "root";
$password = "";


$con = mysql_connect($servername, $username, $password);


if (!$con) {
    die("Connection failed: " . mysql_connect_error());
	}
	//echo "connection successful";
 
$db=mysql_select_db("dept_details",$con)or die(mysql_error());
$str="select *from student_eee where regno='$reg' and pword='$pass'";
$str1="select *from student_civil where regno='$reg' and pword='$pass'";
$str2="select *from student_mech where regno='$reg' and pword='$pass'";
$str3="select *from student_ece where regno='$reg' and pword='$pass'";
$str4="select *from student_cse where regno='$reg' and pword='$pass'";
$str5="select *from student_snh where regno='$reg' and pword='$pass'";


if($dept=="cse"){
	$result=mysql_query($str4,$con);
	$row=mysql_fetch_array($result);
	$regno=$row["regno"];
	$pword=$row["pword"];
	if($pass==$pword && $reg==$regno){
	
	$dept=$row["dept"];
	$_SESSION["regno"]=$regno;
	$_SESSION["pword"]=$pword;
	$_SESSION["dept"]=$dept;
	header('location:landing.php');
		exit();
	}
	else {
		echo "<script type=\"text/javascript\">window.alert('invalid regno or password');
window.location.href = 'index.php';</script>";
	}
}
if($dept=="ece"){
	$result=mysql_query($str3,$con);
	$row=mysql_fetch_array($result);
	$regno=$row["regno"];
	$pword=$row["pword"];
	if($pass==$pword && $reg==$regno){
	
	$dept=$row["dept"];
	echo "<br>".$dept;
	$_SESSION["regno"]=$regno;
	$_SESSION["pword"]=$pword;
	$_SESSION["dept"]=$dept;
	header('location:landing.php');
		exit();
	}
	else {
		echo "<script type=\"text/javascript\">window.alert('invalid regno or password');
window.location.href = 'index.php';</script>";
	}
}

if($dept=="eee"){
	$result=mysql_query($str,$con);
	$row=mysql_fetch_array($result);
	$regno=$row["regno"];
	$pword=$row["pword"];
	if($pass==$pword && $reg==$regno){
	
	$dept=$row["dept"];
	echo "<br>".$dept;
	$_SESSION["regno"]=$regno;
	$_SESSION["pword"]=$pword;
	$_SESSION["dept"]=$dept;
	header('location:landing.php');
		exit();
	}
	else {
		echo "<script type=\"text/javascript\">window.alert('invalid regno or password');
window.location.href = 'index.php';</script>";
	}
}

if($dept=="mech"){
	$result=mysql_query($str2,$con);
	$row=mysql_fetch_array($result);
	$regno=$row["regno"];
	$pword=$row["pword"];
	if($pass==$pword && $reg==$regno){
	
	$dept=$row["dept"];
	echo "<br>".$dept;
	$_SESSION["regno"]=$regno;
	$_SESSION["pword"]=$pword;
	$_SESSION["dept"]=$dept;
	header('location:landing.php');
		exit();
	}
	else {
		echo "<script type=\"text/javascript\">window.alert('invalid regno or password');
window.location.href = 'index.php';</script>";
	}
}

if($dept=="civil"){
	$result=mysql_query($str1,$con);
	$row=mysql_fetch_array($result);
	$regno=$row["regno"];
	$pword=$row["pword"];
	if($pass==$pword && $reg==$regno){
	
	$dept=$row["dept"];
	echo "<br>".$dept;
	$_SESSION["regno"]=$regno;
	$_SESSION["pword"]=$pword;
	$_SESSION["dept"]=$dept;
	header('location:landing.php');
		exit();
	}
	else {
		echo "<script type=\"text/javascript\">window.alert('invalid regno or password');
window.location.href = 'index.php';</script>";
	}
}

if($dept=="snh"){
	$result=mysql_query($str5,$con);
	$row=mysql_fetch_array($result);
	$regno=$row["regno"];
	$pword=$row["pword"];
	if($pass==$pword && $reg==$regno){
	
	$dept=$row["dept"];
	echo "<br>".$dept;
	$_SESSION["regno"]=$regno;
	$_SESSION["pword"]=$pword;
	$_SESSION["dept"]=$dept;
	header('location:landing.php');
		exit();
	}
	else {
		echo "<script type=\"text/javascript\">window.alert('invalid regno or password');
window.location.href = 'index.php';</script>";
	}

}

}
?>

