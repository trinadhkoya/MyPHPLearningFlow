	<?php

	$servername="localhost";
	$username="root";
	$password="";

	$conn=new mysqli($servername,$username,$password);

	if($conn->connect_error)
	die("unable to connect");


	$sql="CREATE DATABASE my_first_database";

	if($conn->query($sql)===TRUE){

	die("successfully your database created");
	}
	else{

	echo "failed".$conn->error;

	}





	$conn->close();
	?>