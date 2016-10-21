	<?php


	$servername="localhost";
	$username="root";
	$password="";
	$databasename="my_database";
	$tablename="my_table";


	try {

	//create a connceton
	$connection= new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);

	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// $sql="INSERT INTO $tablename (firstname,lastname,email) VALUES('steve','jobs','steven@apple.com')";
	// $connection->exec($sql);

	// $sql="INSERT INTO $tablename (firstname,lastname,email) VALUES('trinadh','koya','steven@apple.com')";
	// 	$connection->exec($sql);

	// $sql="INSERT INTO $tablename (firstname,lastname,email) VALUES('uma','gorantala','steven@apple.com')";
	// 	$connection->exec($sql);

	// $sql="INSERT INTO $tablename (firstname,lastname,email) VALUES('steve','jobs','steven@apple.com')";
	// $connection->exec($sql);


	// instead of doing above you can do like below and it is the better approach than previous one

	$connection->exec("INSERT INTO $tablename (firstname,lastname,email) VALUES('stev','jobs','steven@apple.com')");
	$connection->exec("INSERT INTO $tablename (firstname,lastname,email) VALUES('stee','j','steven@apple.com')");






	$last_insert_id=$connection->lastInsertId();
	echo "the last inserted id is ".$last_insert_id;

	//make sure commit the transactions.
	// commit the transaction
	$connection->commit();


	} 
	catch (PDOException  $e) {

	//
	 $connection->rollback();
	// echo "Any thing wrong let me know and roll back" .$e->getMessage();
	

	}

	$connection=null;


	?>