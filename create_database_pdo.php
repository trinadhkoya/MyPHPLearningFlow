	<?php

	$servername='127.0.0.1';
	$username="root";
	$password="";


	//creating connection as
	try {
	$connection=new PDO("mysql:host=$servername;",$username,$password);

	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//creating  a database  titled my_database;
	$sql="CREATE DATABASE my_database";
	//now this time is to xcute
	$connection->exec($sql);
	echo "Successfully  database created";

	} catch (Exception $e) {
	echo "something wen wrong".$e->getMessage();

	}





	?>
