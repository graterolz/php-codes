<?php
	// attempt database connection
	$sqlite = new SQLiteDatabase('music.db') or die ("Could not open database");
	// attempt query execution
	// update record
	// output: "3 row(s) updated."
	$sql = "UPDATE songs SET fk_song_rating = 4 WHERE fk_song_rating = 3";
	if ($sqlite->queryExec($sql) == true) {
		echo $sqlite->changes() . ' row(s) updated.';
	}
	else {
		echo "ERROR: Could not execute $sql. " . sqlite_error_string($sqlite->lastError());
	}
	// close connection
	unset($sqlite);
?>