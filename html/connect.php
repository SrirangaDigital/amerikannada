<?php
	$user='root';
	$password='mysql';
	//~ $password='Sriranga@#$!';
	$database='amk';

	$mysqli = new mysqli("localhost", $user, $password, $database);
		
	if ($mysqli->connect_errno)
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
?>
