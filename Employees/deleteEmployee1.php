<!doctype html>
<html>
<head>
</head>
<body>
<h1>Delete Employee</h1>
<form action="deleteEmployee2.php" method="post">
    <label for="employeeId">employeeId:</label>
    <input type="submit">
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
				echo "geen artikelen gevonden";
			  }


			
			?>
</form>
</body>
</html>