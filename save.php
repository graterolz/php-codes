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
				border: solid 2px green
			}
		</style>
	</head>
	<body>
		<h2>Project 7-3: Creating a Personal To-Do List</h2>
		<h3>Add New Task</h3>
		<?php
			// if form not submitted
			// generate new form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="save.php">
			Description: <br />
			<input type="text" name="name" />
			<p>
				Date due (dd/mm/yyyy): <br />
				<input type="text" name="dd" size="2" />
				<input type="text" name="mm" size="2" />
				<input type="text" name="yy" size="4" />
			<p>
				Priority: <br />
				<select name="priority">
					<option name="High">High</option>
					<option name="Medium">Medium</option>
					<option name="Low">Low</option>
				</select>
			<p>
				<input type="submit" name="submit" value="Save" />
		</form>
		<?php
			}
			else {
				// if form submitted
				// attempt database connection
				$sqlite = new SQLiteDatabase('todo.db') or die ("Could not open database");
				// check and sanitize input
				$name = !empty($_POST['name']) ? sqlite_escape_string($_POST['name']) : die('ERROR: Task name is required');
				$dd = !empty($_POST['dd']) ? sqlite_escape_string((int)$_POST['dd']) : die('ERROR: Task due date is required');
				$mm = !empty($_POST['mm']) ? sqlite_escape_string((int)$_POST['mm']) : die('ERROR: Task due date is required');
				$yy = !empty($_POST['yy']) ? sqlite_escape_string((int)$_POST['yy']) : die('ERROR: Task due date is required');
				$date = checkdate($mm, $dd, $yy) ? mktime(0, 0, 0, $mm, $dd, $yy) : die('ERROR: Task due date is invalid');
				$priority = !empty($_POST['priority']) ? sqlite_escape_string($_POST['priority']) : die('ERROR: Task priority is required');
				// attempt query execution
				// add a new record
				$sql = "INSERT INTO tasks (name, due, priority) VALUES ('$name', '$date', '$priority')";
				if ($sqlite->queryExec($sql) == true) {
					echo '<div id="message">Task record successfully added to database.</div>';
				}
				else {
					echo "ERROR: Could not execute $sql. " . sqlite_error_string($sqlite->lastError());
				}
				// close connection
				unset($sqlite);
			}
		?>
	</body>
</html>