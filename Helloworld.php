	<!DOCTYPE html>
	<html>
	<body>
	<?php
	$servername = "localhost";
	$username = "Hello";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	die("Connection fialed: " . $conn->connect_error);
	}
	echo "Connected successfully";

	$sql="CREATE DATABASE  mydb";

	


	?> 

	$conn->close();

	</body>
	</html>
