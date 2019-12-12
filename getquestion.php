<?php
$mysqli = new mysqli("localhost", "root", "26830102", "database");
if($mysqli->connect_error) {
  exit('Could not connect');
}
else 
echo "connection successful";

$sql = "SELECT ProDiscription,ProSimpleInput,ProSimpleOut,ProMaxMemory,ProMaxTime,ProHint,ProTotalSubmit,ProAuthor,Name FROM problem";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($ProDiscription,$ProSimpleInput,$ProSimpleOut,$ProMaxMemory,$ProMaxTime,$ProHint,$ProTotalSubmit,$ProAuthor,$Name);
$stmt->fetch();
$stmt->close();

echo "<p>hhh</p>";
echo "<table>";
echo "<tr>";
echo "<td>" . $ProDiscription . "</td>";
echo "<th></th>";
echo "<td>" . $ProSimpleInput . "</td>";
echo "<th></th>";
echo "<td>" . $ProSimpleOut . "</td>";
echo "<th></th>";
echo "<td>" . $ProMaxMemory . "</td>";
echo "<th></th>";
echo "<td>" . $ProMaxTime . "</td>";
echo "<th></th>";
echo "<td>" . $ProHint . "</td>";
echo "<th></th>";
echo "<td>" . $ProTotalSubmit . "</td>";
echo "<th></th>";
echo "<td>" . $ProAuthor . "</td>";
echo "<th></th>";
echo "<td>" . $Name . "</td>";
echo "<th></th>";
echo "</tr>";
echo "</table>";
?>