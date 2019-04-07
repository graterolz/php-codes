<?php
	// attempt database connection
	try {
		$pdo = new PDO('mysql:dbname=music;host=localhost', 'user', 'pass');
	}
	catch (PDOException $e) {
		die("ERROR: Could not connect: " . $e->getMessage());
	}
	// if form not yet submitted
	// display form
	if (!isset($_POST['submit'])) {
		// get artists
		$artists = array();
		$sql = "SELECT artist_id, artist_name FROM artists ORDER BY artist_name";
		if ($result = $pdo->query($sql)) {
			while($row = $result->fetchObject()) {
				$artists[$row->artist_id] = $row->artist_name;
			}
		}
		// get ratings
		$ratings = array();
		$sql = "SELECT rating_id, rating_name FROM ratings ORDER BY rating_id";
		if ($result = $pdo->query($sql)) {
			while($row = $result->fetchObject()) {
				$ratings[$row->rating_id] = $row->rating_name;
			}
		}
?>
	<form method="post" action="pdo-music.php">
		Name: <br />
		<input type="text" name="name" />
		<p>
		Artist: <br />
		<select name="artist">
		<?php
			foreach ($artists as $k => $v) {
				echo "<option value=\"$k\">$v</option>\n";
			}
		?>
		</select>
		<p>
		Rating: <br />
		<select name="rating">
		<?php
			foreach ($ratings as $k => $v) {
				echo "<option value=\"$k\">$v</option>\n";
			}
		?>
		</select>
		<p>
		<input type="submit" name="submit" value="Save" />
	</form>
	<?php
		// if form submitted
		// validate input and save record
	}
	else {
		$name = $_POST['name'];
		$artist_id = (int)$_POST['artist'];
		$rating_id = (int)$_POST['rating'];
		// check input
		if (empty($name)) {
			die('ERROR: Please enter a name');
		}
		if (empty($artist_id)) {
			die('ERROR: Please select an artist');
		}
		if (empty($rating_id)) {
			die('ERROR: Please select a rating');
		}
		// escape special characters in input
		$name = $pdo->quote($name);
		$artist_id = $pdo->quote($artist_id);
		$rating_id = $pdo->quote($rating_id);
		// insert record
		$sql = "INSERT INTO songs (song_title, fk_song_artist, fk_song_rating) VALUES ($name, $artist_id, $rating_id)";
		$ret = $pdo->exec($sql);
		if ($ret === false) {
			echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
		}
		else {
			echo 'New song added.';
		}
	}
	// close connection
	unset($pdo);
	?>
	</body>
</html>