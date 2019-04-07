<?php
	// attempt database connection
	$mysqli = new mysqli("localhost", "user", "pass", "test");
	if ($mysqli === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// attempt query execution
	// add a new table
	$sql = "
		CREATE TABLE grades (
		id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		subj_a INT(4) NOT NULL, 
		subj_b INT(4) NOT NULL, 
		subj_c INT(4) NOT NULL)
	";
	//
	if ($mysqli->query($sql) === true) {
		echo 'New table created.';
	}
	else {
		echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
	}
	// close connection
	$mysqli->close();
?>