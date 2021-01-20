<?php
	// attempt database connection
	$mysqli = new mysqli("localhost", "user", "pass", "music");
	if (mysqli_connect_error()) {
		error_log("ERROR: Could not connect. " . mysqli_connect_error() . "\n", 3, 'error.log');
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// attempt query execution
	// iterate over result set
	// print each record and its fields
	// output: "1:Aerosmith \n 2:Abba \n ..."
	$sql = "SELECT artist_id, artist_name FROM artists";
	if ($result = $mysqli->query($sql)) {
		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
				echo $row['artist_id'] . ":" . $row['artist_name'] . "\n";
			}
			$result->close();
		}
		else {
			echo "No records matching your query were found.";
		}
	}
	else {
		error_log("ERROR: Could not execute $sql. " . $mysqli->error . "\n", 3, 'error.log');
		echo "ERROR: Could not execute $sql. " . $mysqli->error;
	}
	// close connection
	$mysqli->close();
?>