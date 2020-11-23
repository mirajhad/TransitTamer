<html>
<h2><center><u>FACULTY</u></center><h2>
<body background="a.jpg">

</body>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM student WHERE choose LIKE 'FACULTY'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	
	<table border="2" align="center">
	<tr>
	<th>NAME</th>
	<th>FATHER NAME</th>
	<th>DOB</th>
	<th>PICKUP</th>
	<th>DROP</th>
	<th>AMOUNT</th>
	
	</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['name']."</td>
				<td>".$result['fathername']."</td>
				<td>".$result['dob']."</td>
				<td>".$result['pickup']."</td>
				<td>".$result['drop']."</td>
				<td>".$result['amount']."</td>
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