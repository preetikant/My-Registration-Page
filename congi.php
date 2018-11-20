<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	//echo "Connected successfully";
}	

?>