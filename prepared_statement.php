
	<?php


	$servername='localhost';
	$databasename='my_database';
	$username="root";
	$password="";
	$tablename="my_table";

	try {
	//create connection

	$connection=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);

	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)	;

	 // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
	//   VALUES (:firstname, :lastname, :email)");

	$sql="INSERT INTO $tablename (firstname,lastname,email) VALUES (:firstname,:lastname,:email)";

	//preparaion of sql and bind  arguments
	$statement=$connection->prepare($sql);

	$statement->bindParam(':firstname',$firstname);
	$statement->bindParam(':lastname',$lastname);
	$statement->bindParam(':email',$email);


	$firstname="TRINADH";
	$lastname="KOYA";
	$email="trinadhkoya9@gmail.com";
	$statement->execute();


	 // insert another row
	$firstname = "STEVEN PAUL";
	$lastname = "JOBS";
	$email = "stevenpauljobs@apple.inc";
	$statement->execute();


	echo " created successfully";

	} catch (PDOException  $e) {
		echo $e->getMessage();

	}

	$connection=null;

	?>
