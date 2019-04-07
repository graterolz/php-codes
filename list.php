<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 7-3: Creating a Personal To-Do List</title>
		<style type="text/css">
		div#message {
			text-align:center; 
			margin-left:auto;
			margin-right:auto;
			width:60%; 
			border: solid 2px green
		}
		table {
			border-collapse: collapse;
			width: 500px;
		}
		tr.heading {
			font-weight: bolder;
		}
		td {
			border: 1px solid black;
			padding: 1em;
		}
		tr.high {
			background: #cc1111;
		}
		tr.medium {
			background: #00aaaa;
		}
		tr.low {
			background: #66dd33;
		}
		a {
			color: black;
			border: outset 2px black;
			text-decoration: none;
			padding: 3px;
		}
		</style>
	</head>
	<body>
		<h2>Project 7-3: Creating a Personal To-Do List</h2>
		<h3>Task List</h3>
		<?php
			// attempt database connection
			$sqlite = new SQLiteDatabase('todo.db') or die ("Could not open database");
			// get records
			// format as HTML table
			$sql = "SELECT id, name, due, priority FROM tasks ORDER BY due";
			if ($result = $sqlite->query($sql)) {
				if ($result->numRows() > 0) {
					echo "<table>\n";
					echo "<tr class=\"heading\">\n";
					echo "<td>Description</td>\n";
					echo "<td>Due date</td>\n";
					echo "<td></td>\n";
					echo "</tr>\n";
					while($row = $result->fetchObject()) {
						echo "<tr class=\"" . strtolower($row->priority) . "\">\n";
						echo "<td>" . $row->name . "</td>\n";
						echo "<td>" . date('d M Y',$row->due) . "</td>\n";
						echo "<td><a href=\"mark.php?id=" . $row->id . "\">Mark as Done</a></td>\n";
						echo "</tr>\n";
					}
					echo "</table>";
				}
				else {
					echo '<div id="message">No tasks listed in database.</div>';
				}
			}
			else {
				echo 'ERROR: Could not execute query: $sql. ' . sqlite_error_string($sqlite->lastError());
			}
			// close connection
			unset($sqlite);
		?>
		<p/>
		<a href="save.php">Add New Task</a>
	</body>
</html>