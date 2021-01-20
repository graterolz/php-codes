<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 7-2: Adding Employees to a Database</title>
		<style type="text/css">
			div#message {
				text-align:center; 
				margin-left:auto; 
				margin-right:auto; 
				width:40%; 
				border: solid 2px green
			}
			table {
				border-collapse: collapse;
				width: 320px;
			}
			tr.heading {
				font-weight: bolder;
			}
			td {
				border: 1px solid black;
				padding: 0 0.5em;
			}
		</style>
	</head>
	<body>
		<h2>Project 7-2: Adding Employees to a Database</h2>
		<h3>Add New Employee</h3>
		<?php
			// attempt connection to MySQL database
			$mysqli = new mysqli("localhost", "user", "pass", "employees");
			if ($mysqli === false) {
				die("ERROR: Could not connect to database. " . mysqli_connect_error());
			}
			// if form submitted
			// process form input
			if (isset($_POST['submit'])) {
				// open message block
				echo '<div id="message">';
				// retrieve and check input values
				$inputError = false;
				if (empty($_POST['emp_name'])) {
					echo 'ERROR: Please enter a valid employee name';
					$inputError = true;
				}
				else {
					$name = $mysqli->escape_string($_POST['emp_name']);
				}
				if ($inputError != true && empty($_POST['emp_desig'])) {
					echo 'ERROR: Please enter a valid employee designation';
					$inputError = true;
				}
				else {
					$designation = $mysqli->escape_string($_POST['emp_desig']);
				}
				// add values to database using INSERT query
				if ($inputError != true) {
					$sql = "INSERT INTO employees (name, designation) 
					VALUES ('$name', '$designation')";
					if ($mysqli->query($sql) === true) {
						echo 'New employee record added with ID: ' . $mysqli->insert_id;
					}
					else {
						echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
					}
				}
				// close message block
				echo '</div>';
			}
		?>
		</div>
		<form action="employee.php" method="POST">
			Employee name: <br />
			<input type="text" name="emp_name" size="40" />
			<p/>
			Employee designation: <br />
			<input type="text" name="emp_desig" size="40" />
			<p/>
			<input type="submit" name="submit" value="Submit" />
		</form>
		<h3>Employee Listing</h3>
		<?php
			// get records
			// format as HTML table
			$sql = "SELECT id, name, designation FROM employees";
			if ($result = $mysqli->query($sql)) {
				if ($result->num_rows > 0) {
					echo "<table>\n";
					echo "<tr class=\"heading\">\n";
					echo "<td>ID</td>\n";
					echo "<td>Name</td>\n";
					echo "<td>Designation</td>\n";
					echo "</tr>\n";
					while($row = $result->fetch_object()) {
						echo "<tr>\n";
						echo "<td>" . $row->id . "</td>\n";
						echo "<td>" . $row->name . "</td>\n";
						echo "<td>" . $row->designation . "</td>\n";
						echo "</tr>\n";
					}
					echo "</table>";
					$result->close();
				}
				else {
					echo "No employees in database.";
				}
			}
			else {
				echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
			}
			// close connection
			$mysqli->close();
		?>
	</body>
</html>