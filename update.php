
<?php
include("connection.php");
error_reporting(0);

?>

<?php
if($_POST['submit'])
{
    $id = $_POST['id'];
	$fn = $_POST['name'];
	$fnm = $_POST['fathername'];
	$db = $_POST['dob'];
	$pkup = $_POST['pickup'];
	$dop = $_POST['drop1'];
	
	$ch = $_POST['choose'];
     $amt = $_POST['amount'];
	$query=mysqli_query($conn,"update student set  name='$fn',fathername='$fnm',dob='$db', pickup='$pkup', drop1='$dop', choose='$ch', amount='$amt' where id='$id'");
if($query)
{
	echo "successfully updated";
	
}
}
?>
<html>
<head>
<title>REGISTRATION FORM</title>
<center><body background="a.jpg">
<table border="2" align="center">
<form name="registration" method="POST" action="">
<!-- we will create registration.php after registration.html -->
<center><h3>REGISTRATION</h3></center>
<tr>
<th>ID</th>
<td><input type="text" name="id" value="<?php echo $_GET['id']; ?>"/></br></td>
</tr>
<tr>
<th>NAME:</th>
<td><input type="text" name="name" value="<?php echo $_GET['nm']; ?>"/></br></td>
</tr>

<tr>
<th>FATHER NAME:</th>
<td><input type="text" name="fathername" value="<?php echo $_GET['fnm']; ?>"/></br></td>
</tr>
<tr>
<th>DOB:</th>
<td><input type="text" name="dob" value="<?php echo $_GET['db']; ?>"/></br></td>
</tr>
<tr>
<th>PICKUP</th>
<td><input type="text" name="pickup" value="<?php echo $_GET['pup']; ?>"/></br></td>
</tr>
<tr>
<th>DROP</th>
<td><input type="text" name="drop1" value="<?php echo $_GET['dop']; ?>"/></br></td>
</tr>
<tr>
<th>CHOOSE</th>
<td><select name="choose" value="<?php echo $_GET['categ1']; ?>">
<option>FACULTY</option>
<option>STUDENT</option>
</select></td>
</tr>
<tr>
<th>AMOUNT</th>
<td><input type="text" name="amount" value="<?php echo $_GET['amt1']; ?>"/></br></td>
</tr>
<tr>
<tr>
<th><input type="submit" name="submit" value="update"></th>
<td><a href="view_all.php">click here for view </a></td>
</tr>
</form>

</table>
</body>
</center>
</head>
</html>