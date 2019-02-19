<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$conn= new mysqli($servername, 
						$username, 
						$password);
	if ($conn->connect_error) {

		die("connection went wrong: " . $conn->connect_error);
	}
// sql to create table
$sql = "CREATE DATABASE project";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
