<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arm base";
// Create connection
$conn= new mysqli("localhost","root","","arm base");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO MyGuests (directoin)
VALUES ('r')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>