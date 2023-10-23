<!doctype html>
<html>
<head>
</head>
<body>
<form action="searchEmployee2.php" method="post">
			<label for="employeeId">memployeeId:</label>
			

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
				echo "no employee found";
			  }


			
			?>
			</select>

			<input type="submit">

</body>

