<?php
session_start();
include("connection.php");
?>


<html>
<head>
<title>
LOGIN PAGE
</title>
</head>
<style type="text/css">
  body{
       background-color:powderblue;
      }
   button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
   }
.cancel{
        background-color:red;
        width:10%;
        }

</style>
<body background="a.jpg">
<form action="" method="POST">
<a href="registration.php">click here for registration</a>
<marquee>WELCOME TO LOGIN PAGE</marquee><center>
<br/>
<br/>
<br/><br/>
<img src="a.png" alt="image not found"> 
<p>USERNAME</p><br/>
<input type="text" type="text" name="name" value=""><br/><br/>
<p>PASSWORD</p>
<input type="text" name="password" value=""><br/><br/>
LOGIN<input type="submit" name="submit" value="Login"><br/>
<input type="checkbox">Remember me 
<br/><br/>
<button type="submit" class="cancel">cancel</button>
&nbsp&nbsp&nbspforgot<a href="a.html">   password?</a>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$user= $_POST['name'];
	$pwd= $_POST['password'];
	$query="SELECT * FROM student WHERE name='$user' && password='$pwd'";
	
	$data = mysqli_query($conn , $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location:sdashboard.php');
	}
	else
	{
		echo "<script type='text/javascript'>alert('incorrect password')</script>";
	}
}
?>