<!doctype html>
<html>
	<head>
		<title>delete Medewerker formulier 3</title>
	</head>
	<body>
		<h1>delete Medewerker formulier 3</h1>
		
		<?php
			require "Employee.php";

		    $employeeId = $_POST["employeeIdVak"];
			$verwijderen = $_POST["verwijderBox"];
			
			if ($verwijderen=="ja")
			{
				echo "De employee is verwijderd <br/>";
				$employee1 =  new Employee();
				$employee1->deleteEmployee($employeeId);
			}
			else
			{
				echo "De medewerker is niet verwijderd <br/>";
			}
		?>
		<a href="medewerkermenu.html">Terug naar het hoofdmenu</a>
	</body>
</html>
