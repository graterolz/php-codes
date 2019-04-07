<?php
	// attempt database connection
	$sqlite = new SQLiteDatabase('test.db') or die ("Could not open database");
	// attempt query execution
	// add a new table
	$sql = "
		CREATE TABLE grades (
		id INTEGER PRIMARY KEY,
		subj_a INTEGER NOT NULL, 
		subj_b INTEGER NOT NULL, 
		subj_c INTEGER NOT NULL)
	";
	if ($sqlite->queryExec($sql) == true) {
		echo 'New table created.';
	}
	else {
		echo "ERROR: Could not execute $sql. " . sqlite_error_string($sqlite->lastError());
	}
	// close connection
	unset($sqlite);
?>