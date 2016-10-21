	<?php

	$servername='localhost';
	$username='root';
	$password='';
	$dbname='my_first_database';



	// this is for creating connection  with the specified parameters like servername,username,password,dbname
	//dbname->without this we can't create table,with out existing table we can't   insert data


	$connection=new mysqli($servername,$username,$password,$dbname);

	if($connection->connect_error){
	echo ("seems like connection failed.Let's see the erro".$connection->connect_error);
	}

	//so ,if connection exceted successfully,will do what we need
	//create your Query for inserting the data under your specified database

	$sql="INSERT INTO my_table  (first_name,last_name,reg_date)  VALUES ('trinadh','koya','')";
	//so we have written our Query for insertion .let's see

	if($connection->query($sql)===TRUE){
	echo "Data inserted successfully";
	}
	else{

	echo "What the FXXX" .$sql ."<br".$connection->error;
	}

//connection closing time

	$connection->close();



	?>
