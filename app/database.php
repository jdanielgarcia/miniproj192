<?php

$servername = "localhost";
$username = "root";
$password = "thereisnopass123";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE things";
if($conn->query($sql) === TRUE){
	echo "Database created";
} else {
	echo "Error creating database";
}