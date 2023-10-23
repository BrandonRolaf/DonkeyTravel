<!doctype html>
<html>
	<head>
		<title>update employee Formulier 1</title>
	</head>
	<body>
		<h1>update employee formulier 1</h1>
			<form action="updateEmployee2.php" method="post">
			<label for="employeeId">employeeId:</label>
			<select id="employeeId" name="employeeIdVak">

			<?php
			include "connectDB.php";
			
			$sql = "SELECT employeeId, name FROM employees";
			$result = $conn->query($sql);

			if ($result->rowCount() > 0) {
				while($row = $result->fetch()) {
				  echo "<option value='" . $row["employeeId"] . "'>" . $row["employeeId"] . " - ". $row["name"] . "</option>";
				}
			  } else {
				echo "no employees found";
			  }


			
			?>
			</select>

			<input type="submit">
		</form>
		<a href="medewerkermenu.html"><br/>Terug naar het hoofdmenu</a>
	</body>
