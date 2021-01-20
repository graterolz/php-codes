<?php
	// define values to be inserted
	$songs = array(
		array('Voulez-Vous', 2, 5),
		array('Take A Chance On Me', 2, 3),
		array('I Have A Dream', 2, 4),
		array('Thank You For The Music', 2, 4),
	);
	// attempt a connection
	try {
		$pdo = new PDO('mysql:dbname=music;host=localhost', 'user', 'pass');
	}
	catch (PDOException $e) {
		die("ERROR: Could not connect: " . $e->getMessage());
	}
	// create and execute INSERT query
	$sql = "INSERT INTO songs (song_title, fk_song_artist, fk_song_rating) VALUES (?, ?, ?)";
	if ($stmt = $pdo->prepare($sql)) {
		foreach ($songs as $s) {
			$stmt->bindParam(1, $s[0]);
			$stmt->bindParam(2, $s[1]);
			$stmt->bindParam(3, $s[2]);
			if ($stmt->execute()) {
				echo "New song with id: " . $pdo->lastInsertId() . " added.\n";
			}
			else {
				echo "ERROR: Could not execute query: $sql. " . print_r($pdo->errorInfo());
			}
		}
	}
	else {
		echo "ERROR: Could not prepare query: $sql. " . print_r($pdo->errorInfo());
	}
	// close connection
	unset($pdo);
?>