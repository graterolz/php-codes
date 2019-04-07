<?php
	// attempt database connection
	$sqlite = new SQLiteDatabase('music.db') or die ("Could not open database");
	// attempt query execution
	// iterate over result set
	// print each record and its fields
	// output: "1:Aerosmith \n 2:Abba \n ..."
	$sql = "SELECT artist_id, artist_name FROM artists";
	if ($result = $sqlite->query($sql)) {
		if ($result->numRows() > 0) {
			while($row = $result->fetchObject()) {
				echo $row->artist_id . ":" . $row->artist_name . "\n";
			}
		}
		else {
			echo "No records matching your query were found.";
		}
	}
	else {
		echo "ERROR: Could not execute $sql. " . sqlite_error_string($sqlite->lastError());
	}
	// close connection
	unset($sqlite);
?>
