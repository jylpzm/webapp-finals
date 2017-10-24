<?php
session_start();

	$username="root";
	$password="dbms";
	$database="webapp";
	$server="localhost";

//Aktuwal na pagpasok sa database
$conn = new mysqli($server, $username, $password, $database);
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }

?>