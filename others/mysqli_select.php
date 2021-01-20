<?php
	// intenta conectarse con la base de datos
	$mysqli = new mysqli("localhost","root","","music");
	if($mysqli==false)
		die("ERROR: No se estableció la conexión." . mysqli_connect_error());
	// intenta ejecutar consulta
	// itera sobre colección de resultados
	// muestra cada registro y sus campos
	// datos de salida: "1: Aerosmith \n 2: Abba \n...."
	$sql = "SELECT artist_id, artist_name FROM artists";
	if ($result = $mysqli->query($sql)) {
		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
				echo $row[0] . " : " . $row[1] . "\n";
				echo "<br>";
			}
			$result->close();
		}
		else
			echo "No records matching your query were found.";
	}
	else 
		echo "ERROR: Could not execute $sql. " . $mysqli->error;
	// cierra la conexión
	$mysqli->close();
?>