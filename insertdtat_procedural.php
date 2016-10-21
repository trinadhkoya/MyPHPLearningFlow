	<?php

	$servername='localhost';
	$username='root';
	$password='';
	$dbname='my_first_database';
	$table_name='my_table';



	$connection=mysqli_connect($servername,$username,$password,$dbname);

	if(!$connection){
	die("connection failed".mysqli_connect_error());

	}


	$sql ="INSERT INTO $table_name (first_name,last_name,reg_date) VALUES ('steven','jobs','')";

	if(mysqli_query($connection,$sql)){
	echo " Data inserted successfully";

	}
	else{
	echo " what the heck ".mysqli_connect_error($connection);
	}


	mysqli_close($connection);



	?>