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
		while($row = $result->fetch()) {
			echo $row[0] . ":" . $row[1] . "\n";
		}
	}
	else {
		echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
	}
	// close connection
	unset($pdo);
?>
