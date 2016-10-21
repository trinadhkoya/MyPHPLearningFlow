	<?php


	//this is a way to connect mysql/whatever through PDO (php data object)
	//you can see more on PDO over MySQL or MySQLi from this link
	//https://code.tutsplus.com/tutorials/pdo-vs-mysqli-which-should-you-use--net-24059

	$servername='localhost';
	$username='root';
	$password='';
	$dbname='my_first_database';




	try {
		//creating connection 
	$connection=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

	// benefit of PDO is that it has an exception class to handle any problems
	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "connection success";

	} catch (PDOException  $e) {
		echo "connection failed ".$e->getMessage();
	}



	$connection=null;

	?>
