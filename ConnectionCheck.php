<?php

$servername='localhost';
$username='root';
$password='';

$db ='my_first_database';



$con=mysqli_connect($servername,$username,$password,$db);


if(mysqli_connect_error()){
	echo "connection failed".mysqli_connect_error();
}else{
	echo "connection successfully executed";
}

$con->close();

// //creating a connection 
// $con =new mysqli($servername,$username,$password);

// if($con->connect_error){
// 	die("connection failed");
// }else{
// 	die("connection success");
// }

?>
