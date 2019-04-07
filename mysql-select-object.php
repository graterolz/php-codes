<?php
	// attempt database connection
	$mysqli = new mysqli("localhost", "user", "pass", "music");
	if ($mysqli === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// attempt query execution
	// iterate over result set
	// print each record and its fields
	// output: "1:Aerosmith \n 2:Abba \n ..."
	$sql = "SELECT artist_id, artist_name FROM artists";
	if ($result = $mysqli->query($sql)) {
		if ($result->num_rows > 0) {
			while($row = $result->fetch_object()) {
				echo $row->artist_id . ":" . $row->artist_name . "\n";
			}
			$result->close();
		}
		else {
			echo "No records matching your query were found.";
		}
	}
	else {
		echo "ERROR: Could not execute $sql. " . $mysqli->error;
	}
	// close connection
	$mysqli->close();
?>