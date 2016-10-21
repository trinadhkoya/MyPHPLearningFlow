	<?php


	//make sure varibale names should reflect their behaviour
	//documentaton is important
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="my_database";

	try {
		
	$connection=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);

	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	$sql="CREATE TABLE my_table(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(30) ,created_date TIMESTAMP)";

	$connection->exec($sql);

	echo "Table created Successfully";


	} catch (PDOException  $e) {
		
		echo $sql. "<br>".$e->getMessage();

	}


	$connection->null;


	?>
