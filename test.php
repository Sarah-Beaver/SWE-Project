<?php 
//all variable start with $
// Create connection server, username, password, database
$con=mysqli_connect();

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//in querey go the sql 
$sql="SELECT * FROM `azbioResults` where 'score'>'$score' ";
$result = $con->query("SHOW TABLES");

$Result = $result->fetch_assoc();

print_r($Result);

?>
