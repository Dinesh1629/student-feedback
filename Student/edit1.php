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
	
?>
<?php

if (isset($_POST)) {
$regno=$_SESSION["regno"];
$dept=$_SESSION["dept"];
$name=$_POST['name'];
$sem=$_POST['sem'];

$year=$_POST['year'];
$email=$_POST['emailid'];
$phone=$_POST['phoneno'];
}


$servername = "localhost";
$username = "root";
$password = "";


$con=mysql_connect($servername, $username, $password);


if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}
//echo "Connected successfully";
 
$db=mysql_select_db("dept_details",$con)or die(mysql_error());
if($db)
{
	echo "conneted";
}

if($dept=="cse")
{
$str="update student_cse set regno='$regno',name='$name',sem='$sem',dept='$dept',year='$year',emailid='$email',phoneno='$phone' where regno='$regno'";
}
elseif($dept=="ece")
{
$str="update student_ece set regno='$regno',name='$name',sem='$sem',dept='$dept',year='$year',emailid='$email',phoneno='$phone' where regno='$regno'";
}
elseif($dept=="eee")
{
$str="update student_eee set regno='$regno',name='$name',sem='$sem',dept='$dept',year='$year',emailid='$email',phoneno='$phone' where regno='$regno'";
}
elseif($dept=="civil")
{
$str="update student_civil set regno='$regno',name='$name',sem='$sem',dept='$dept',year='$year',emailid='$email',phoneno='$phone' where regno='$regno'";
}
elseif($dept=="mech")
{
$str="update student_mech set regno='$regno',name='$name',sem='$sem',dept='$dept',year='$year',emailid='$email',phoneno='$phone' where regno='$regno'";
}
elseif($dept=="snh")
{
$str="update student_snh set regno='$regno',name='$name',sem='$sem',dept='$dept',year='$year',emailid='$email',phoneno='$phone' where regno='$regno'";
}

$result=mysql_query($str,$con);

if ($result) { 
echo "<script type=\"text/javascript\">window.alert('Data Inserted successfully');
window.location.href = 'landing.php';</script>"; 
}
else
{
echo "<script type=\"text/javascript\">window.alert('Error on inserting data');
window.location.href = 'landing.php';</script>"; 
}





?>


`

