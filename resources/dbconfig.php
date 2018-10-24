<?php			
	$servername = "localhost";
	$username = "root";
	$passworddb = "WhateverPassword";
	$dbname = "prism";
	$conn = new mysqli($servername, $username, $passworddb, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>