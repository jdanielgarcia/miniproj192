<?php

$servername = "localhost";
$username = "root";
$password = "thereisnopass123";
$databasen = "things";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE things";
if($conn->query($sql) === TRUE){
	echo "Database created";
} else {
	$conn->close();
	$conn = new mysqli($servername, $username, $password, $databasen);
}

class ModelFactory{
	protected $pubconn;
	public function __construct(){
		$pubconn = $this->conn;
	}

	public function buildObject(){

	}
}