<?php
	// attempt database connection
	$mysqli = new mysqli("localhost", "user", "pass", "music");
	if ($mysqli === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// attempt query execution
	// add a new record
	// output: "1 row(s) updated."
	$sql = "UPDATE artists SET artist_name = 'Eminem', artist_country = 'US' WHERE artist_id = 7";
	if ($mysqli->query($sql) === true) {
		echo $mysqli->affected_rows . ' row(s) updated.';
	} else {
		echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
	}
	// close connection
	$mysqli->close();
?>