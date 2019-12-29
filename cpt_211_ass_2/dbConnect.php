<?php
	
	$severname = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "cpt211"; 

	// Create Database Connection
	$conn = mysqli_connect($severname, $dbUsername, $dbPassword, $dbName);

	// Condition if no Database Connection
	if(!$conn){
		die("Connection Failed : ".mysqli_connect_error());
	}

?>