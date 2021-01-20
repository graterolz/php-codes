<?php
	// attempt a connection
	try {
		$mysql = new PDO('mysql:dbname=test;host=localhost', 'user', 'pass');
		$sqlite = new PDO('sqlite:a.db');
	}
	catch (PDOException $e) {
		die("ERROR: Could not connect: " . $e->getMessage());
	}
	// prepare INSERT statement for SQLite
	$sql_1 = "INSERT INTO grades (id, subj_a, subj_b, subj_c) VALUES (?, ?, ?, ?)";
	if ($stmt = $sqlite->prepare($sql_1)) {
		// create and execute SELECT query for MySQL
		$sql_2 = "SELECT id, subj_a, subj_b, subj_c FROM grades";
		if ($result = $mysql->query($sql_2)) {
			// for each record
			// bind to prepared statement and insert into SQLite
			while($row = $result->fetch()) {
				$stmt->bindParam(1, $row[0]);
				$stmt->bindParam(2, $row[1]);
				$stmt->bindParam(3, $row[2]);
				$stmt->bindParam(4, $row[4]);
				$stmt->execute();
			}
			echo 'Record(s) successfully migrated.';
		}
		else {
			echo "ERROR: Could not execute $sql_2. " . print_r($mysql->errorInfo());
		}
	}
	else {
		echo "ERROR: Could not prepare query: $sql_1. " . print_r($sqlite->errorInfo());
	}
	// close connection
	unset($mysql);
	unset($sqlite);
?>