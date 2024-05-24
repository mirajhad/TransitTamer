<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12708977";
$password = "JG38N4Yxa1";
$dbname= "transport";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>