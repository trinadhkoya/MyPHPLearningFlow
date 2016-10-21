<?php

$servername="localhost";
$username="root";
$password="";
$databasename="my_database";
$tablename='my_table';



try {

	$connection=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);

	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="INSERT INTO $tablename (firstname,lastname,email) VALUES ('trnadh','koya','trinadhkoya9@gmail.com')";

	$connection->exec($sql);

	$_id =$connection->lastInsertId();

	echo "successfully inserted ".$_id;
	
} catch (Exception $e) {
	echo "something went wrong".$e->getMessage();
}


$connection=null;
?>