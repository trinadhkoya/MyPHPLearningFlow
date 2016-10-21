	<?php 


	$servername="localhost";
	$username="root";
	$password="";
	$dbname="my_first_database";

	$conn=  mysqli_connect($servername,$username,$password,$dbname);

	echo $conn;

	if(!$conn){
		die("connection failed".mysqli_connect_error());
	}

	$sql ="CREATE TABLE my_table(


	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(45) NOT NULL,
	last_name VARCHAR(45) NOT NULL,
	reg_date TIMESTAMP

	)";

	if(mysqli_query($conn,$sql)){

	echo "Table created under my_first_database with name ";

	}
	else{

	echo "Table creation failed".mysqli_error($conn);

	}

	mysqli_close($conn);

	?>