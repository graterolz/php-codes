<?php
	// attempt database connection
	$mysqli = new mysqli("localhost", "user", "pass", "music");
	if ($mysqli === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// attempt query execution
	// add a new record
	// output: "New artist with id:7 added."
	$sql = "INSERT INTO artists (artist_name, artist_country) VALUES ('Kylie Minogue', 'AU')";
	if ($mysqli->query($sql) === true) {
		echo 'New artist with id:' . $mysqli->insert_id . ' added.';
	} else {
		echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
	}
	// close connection
	$mysqli->close();
?>