<?php
$servername = 'localhost';
$username = 'cs4400_Team_5@localhost';
$password = '2KZtbzKa';
$dbname = "cs4400_Team_5"

$conn = new mysqli_connect($servername, $username, $password);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
