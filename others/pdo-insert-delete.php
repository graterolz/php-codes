<?php
	// attempt a connection
	try {
		$pdo = new PDO('mysql:dbname=music;host=localhost', 'user', 'pass');
	}
	catch (PDOException $e) {
		die("ERROR: Could not connect: " . $e->getMessage());
	}
	// create and execute INSERT query
	$sql = "INSERT INTO artists (artist_name, artist_country) VALUES ('Luciano Pavarotti', 'IT')";
	$ret = $pdo->exec($sql);
	if ($ret === false) {
		echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
	}
	else {
		$id = $pdo->lastInsertId();
		echo 'New artist with id: ' . $id . ' added.';
	}
	// create and execute DELETE query
	$sql = "DELETE FROM artists WHERE artist_country = 'IT'";
	$ret = $pdo->exec($sql);
	if ($ret === false) {
		echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
	}
	else {
		echo 'Deleted ' . $ret . ' record(s).';
	}
	// close connection
	unset($pdo);
?>
