<?php
	// genera una tabla HTML
	// 3 filas, 4 columnas
	echo "<table border=\"1\">";
	for($fila=1; $fila<4; $fila++) {
		echo "<tr>";
		for($col=1; $col<5; $col++)
			echo "<td>Fila $fila, Columna $col</td>";
		echo "</tr>"; 
	}
	echo "</table>";
?>