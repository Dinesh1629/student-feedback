<?php
session_start();
$regno=$_SESSION["regno"];
$pword=$_SESSION["pword"];
$_SESSION["pword"]=$pword;
$_SESSION["regno"]=$regno;

if($regno && $pword)
{
	echo "session valid";
}
else{
    echo "session doesnot valid";
}
	
?>



<?php
$sub=$_SESSION["subname"];
$regno=$_SESSION["regno"];

$v5=$_SESSION["year"];
$v3=$_SESSION["sem"];
$dept=$_SESSION["dept"];
$v2=$_SESSION["name"];

$feedback=$_POST['feedback'];
$staffname=$_POST['subname'];
$set=explode("-",$staffname);

echo $set[0];
echo $set[1];
 	
	
$servername = "localhost";
$username = "root";
$password = "";


$con = mysql_connect($servername, $username, $password);
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
	}
	//echo "connection successful";
$db=mysql_select_db("dept_details",$con)or die(mysql_error());


$str="insert into feedback values('','$set[0]','$v2','$v5','$dept','$v3','$set[1]','$feedback')";

$result=mysql_query($str,$con);
/*if ($result) { 
echo "<script type=\"text/javascript\">window.alert('Data Inserted successfully');
window.location.href = 'feedback.php';</script>"; 
}
else
{
echo "<script type=\"text/javascript\">window.alert('Error on inserting data');
window.location.href = 'feedback.php';</script>"; 
}*/



?>
