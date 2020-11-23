<html>
<h2><center><u>ALL</u></center><h2>
<body background="a.jpg">

</body>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM student ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	
	<table border="2" align="center">
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>FATHER NAME</th>
	<th>DOB</th>
	<th>PICKUP</th>
	<th>DROP</th>
	<th>CATEGORY</th>
	<th>AMOUNT</th>
	<th colspan="2">OPERATION</th>
	
	</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['name']."</td>
				<td>".$result['fathername']."</td>
				<td>".$result['dob']."</td>
				<td>".$result['pickup']."</td>
				<td>".$result['drop1']."</td>
				<td>".$result['choose']."</td>
				<td>".$result['amount']."</td>
				<td><a href='update.php?id=$result[id]&nm=$result[name]&fnm=$result[fathername]&db=$result[dob]&pup=$result[pickup]&dop=$result[drop1]&categ=$result[choose]&amt=$result[amount]'>Edit</a></td>
				<td><a href='delete.php?id=$result[id]'>Delete</a></td>
			</tr>";
	}
}
	else
	{
		echo "";
	}
	?>
	</table>
	<a href="dashboard.php">BACK</a>
	<html>



