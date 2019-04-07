<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 7-3: Creating a Personal To-Do List</title>
		<style type="text/css">
			div#message {
				text-align:center; 
				margin-left:auto; 
				margin-right:auto; 
				width:40%; 
				border: solid 2px green;
			}
		</style>
	</head>
	<body>
		<h2>Project 7-3: Creating a Personal To-Do List</h2>
		<h3>Remove Completed Task</h3>
		<?php
			if (isset($_GET['id'])) {
				// attempt database connection
				$sqlite = new SQLiteDatabase('todo.db') or die ("Could not open database");
				// check and sanitize input
				$id = !empty($_GET['id']) ? sqlite_escape_string((int)$_GET['id']) : die('ERROR: Task ID is required');
				// delete record
				$sql = "DELETE FROM tasks WHERE id = '$id'";
				if ($sqlite->queryExec($sql) == true) {
					echo '<div id="message">Task record successfully removed from database.</div>';
				}
				else {
					echo "ERROR: Could not execute $sql. " . sqlite_error_string($sqlite->lastError());
				}
				// close connection
				unset($sqlite);
			}
			else {
				die ('ERROR: Task ID is required');
			}
		?>
	</body>
</html>