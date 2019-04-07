<?php
	// attempt database connection
	$sqlite = new SQLiteDatabase('music.db') or die ("Could not open database");
	// attempt query execution
	// iterate over result set
	// print each record and its fields
	// output: "1:Aerosmith \n 2:Abba \n ..."
	$sql = "SELECTa artist_id, artist_name FROM artists";
	if ($result = $sqlite->query($sql)) {
		$data = $result->fetchAll();
		if (count($data) > 0) {
			foreach ($data as $row) {
				echo $row[0] . ":" . $row[1] . "\n";
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
