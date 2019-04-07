<?php
	// attempt database connection
	$sqlite = new SQLiteDatabase('music.db') or die ("Could not open database");
	// attempt query execution
	// add a new record
	// output: "New artist with id:8 added."
	$sql = "INSERT INTO artists (artist_name, artist_country) VALUES ('James Blunt', 'UK')";
	if ($sqlite->queryExec($sql) == true) {
		echo 'New artist with id:' . $sqlite->lastInsertRowid() . ' added.';
	} else {
		echo "ERROR: Could not execute $sql. " . sqlite_error_string($sqlite->lastError());
	}
	// close connection
	unset($sqlite);
?>
