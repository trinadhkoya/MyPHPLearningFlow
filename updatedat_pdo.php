	<?php

	$servername="localhost";
	$databasename="my_database";
	$username="root";
	$password="";
	$tablename="my_table";

	try {

		$connection=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);

	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="UPDATE $tablename  SET lastname='WOZ' WHERE id=55";
	$statement=$connection->prepare($sql);
	$statement->execute();

	echo $statement->rowCount()." updated ";

	}
	 catch (PDOException  $e) {

		echo "Error is ".$e->getMessage();
		
	}
	$connection=null;











	?>
