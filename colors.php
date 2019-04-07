<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 1-1: An HTML Color Table</title>
		<style type="text/css">
		body {
			font-family: Verdana sans-serif;
		}
		td {
			border: solid 5px white;
		}
		</style>
	</head>
	<body>
		<h2>Project 1-1: An HTML Color Table</h2>
		<table>
			<tr>
				<td>Blue</td>
				<td style="width:40px; background-color:#0000ff"></td>
			</tr>
			<tr>
				<td><?php echo 'Red'; ?></td>
				<td style="width:40px; background-color:<?php echo '#ff0000'; ?>"></td>
			</tr>
			<?php
				// this row generated through PHP
				echo "<tr>\n";
				echo "<td>Green</td>\n";
				echo "<td style=\"width:40px; background-color:#00ff00\"></td>\n";
				echo "</tr>\n";
			?>
		</table>
	</body>
</html>