<?php
include("connection.php");
error_reporting(0);

$id = $_GET['id'];
$query = "DELETE FROM STUDENT WHERE ID='$id'";
$data = mysqli_query($conn, $query);

if($data)
{
    echo '<script> alert("deleted successfully")</script>';
    header("location:view_all.php");
    
}

?>