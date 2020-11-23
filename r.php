<?php
include("connection.php");
error_reporting(0);
?>

<?php
if($_POST['submit'])
{
	$fn = $_POST['name'];
	$fnm = $_POST['fathername'];
	$db = $_POST['dob'];
	$pkup = $_POST['pickup'];
	$dop = $_POST['drop1'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpassword'];
	$ch = $_POST['choose'];
	$query=mysqli_query($conn,"insert into student(name,fathername,dob,pickup,drop1,password,rpassword,choose) values('$fn','$fnm','$db','$pkup','$dop','$pass','$rpass','$ch')");
if($query)
{
	echo "Successfully Registered. You can login now'";
	
}
}
?>
<a href="login.php">click here for login</a>