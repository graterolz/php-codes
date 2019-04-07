<?php
	$host="localhost";
	$user="root";
	$password="";
	$dbname="jb";
	$link = mysql_connect ($host, $user, $password) or die (mysql_error());	
	mysql_select_db($dbname, $link);
	$query="SELECT * FROM palabras";
	$result=mysql_query ($query, $link) or die(mysql_error());
	$totEmp = mysql_num_rows($result);
?>
<table border=1>
<?php
	if ($totEmp> 0) {
		while ($rowEmp = mysql_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$rowEmp['letra']."</td>";
			echo "<td>".$rowEmp['codigo_letra']."</td>";
			echo "<td>".$rowEmp['descripcion_letra']."</td>";
			echo "</tr>";
		}
	}
?>
</table>
<?php
	mysql_close($link);
?>