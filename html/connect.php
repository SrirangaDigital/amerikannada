<?php
	$user='root';
	$password='mysql';
	//~ $password='Sriranga@#$!';
	$database='amk';

	$mysqli = new mysqli("localhost", $user, $password, $database);
	$mysqli->set_charset('utf8');
	if ($mysqli->connect_errno)
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
?>
