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
		echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
	}
	// close connection
	unset($pdo);
?>