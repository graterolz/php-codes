<?php
	// attempt a connection
	try {
		$pdo = new PDO('mysql:dbname=music;host=localhost', 'user', 'pass');
	}
	catch (PDOException $e) {
		die("ERROR: Could not connect: " . $e->getMessage());
	}
	// create and execute SELECT query
	$sql = "SELECT artist_id, artist_name FROM artists";
	if ($result = $pdo->query($sql)) {
		// retrieve record as numeric array
		$row = $result->fetch(PDO::FETCH_NUM);
		echo $row[0] . ":" . $row[1] . "\n";
		// retrieve record as associative array
		$row = $result->fetch(PDO::FETCH_ASSOC);
		echo $row['artist_id'] . ":" . $row['artist_name'] . "\n";
		// retrieve record as object
		$row = $result->fetch(PDO::FETCH_OBJ);
		echo $row->artist_id . ":" . $row->artist_name . "\n";
		// retrieve record using combination of styles
		$row = $result->fetch(PDO::FETCH_LAZY);
		echo $row['artist_id'] . ":" . $row->artist_name . "\n";
	}
	else {
		echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
	}
	// close connection
	unset($pdo);
?>