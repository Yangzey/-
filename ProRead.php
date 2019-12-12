<?php
		
$servername = "localhost";
$username = "root";
$password = "26830102";
$dbname = "database";

// Connect MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);
				
// set up char set
if (!$conn->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $conn->error);
	exit();
}
				
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
$name = $_GET['value'];
if($name=="please")
{
	echo "get successful!";
}
else{
echo "get failed";
}
echo "<br>".$name."</br>";			
$sql = "SELECT * FROM `problem` WHERE Name = 'please'";	// set up sql query
$result = $conn->query($sql);	// Send SQL Query

if ($result->num_rows > 0) {	
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		echo $row['Name'];
		
		//echo "<br>".$row['ProDiscription']."</br>";
		echo "<br>".$row['ProSimpleInput']."</br>";
		echo $row['ProSimpleOut']."</br>";
		echo $row['ProHint']."</br>";
		echo "<br>MaxMemory:".$row['ProMaxMemory']."   MaxTime:".$row['ProMaxTime']."</br>Author:";
		echo $row['ProAuthor']."</br>";
		Header('Content-type:application/pdf');
		echo $row['ProDiscription'];
	}
}
else {
	echo "0 results";
}
?>