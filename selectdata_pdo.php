<?php
$servername="localhost";
$username="root";
$password="";
$databasename="my_database";
$tablename="my_table";

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator 
{
	function _construct($it){
		parent::_construct($it,self::LEAVES_ONLY);

	}


	 function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

	 function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    } 
}



try {

	$connection=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql= "SELECT  id ,firstname,lastname FROM $tablename";

	$statement = $connection->prepare($sql);
	$statement->execute();

	$result= $statement->setFetchMode(PDO::FETCH_ASSOC);
	foreach (new TableRows(new RecursiveArrayIterator
		($statement->fetchAll())) as $key => $value) {
		echo $value;
	}

	
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>
