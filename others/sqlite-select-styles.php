<?php
	// attempt database connection
	$sqlite = new SQLiteDatabase('music.db') or die ("Could not open database");
	// attempt query execution
	// print records using different styles
	// output: "1:Aerosmith \n 2:Abba \n ..."
	$sql = "SELECT artist_id, artist_name FROM artists";
	if ($result = $sqlite->query($sql)) {
		// retrieve record as numeric array
		$row = $result->fetch(SQLITE_NUM);
		echo $row[0] . ":" . $row[1] . "\n";
		// retrieve record as associative array
		$row = $result->fetch(SQLITE_ASSOC);
		echo $row['artist_id'] . ":" . $row['artist_name'] . "\n";
		// retrieve record as object
		$row = $result->fetchObject();
		echo $row->artist_id . ":" . $row->artist_name . "\n";
	}
	else {
		echo "ERROR: Could not execute $sql. " . sqlite_error_string($sqlite->lastError());
	}
	// close connection
	unset($sqlite);
?>
