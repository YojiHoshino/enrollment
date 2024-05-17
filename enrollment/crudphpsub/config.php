<?php
	const DBHOST = 'localhost';
	const DBUSER = 'u893974712_asiatech';
	const DBPASS = 'Andrei2003pogi';
	const DBNAME = 'u893974712_asiatech';

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}
?>