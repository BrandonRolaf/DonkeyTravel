<!doctype html>
<html>
	<head>
		<title>delete employee 2</title>
	</head>
	<body>
		<h1>delete employee 2</h1>
		
		<?php
			require "Employee.php";					// nodig om object te maken
			$employeeId = $_POST["employeeIdVak"];	// uitlezen vakje van deleteLeverancierForm1 
			$employee1 = new Employee();				// object aanmaken
			$employee1->searchEmployee($employeeId);
		?>
		
		<form action="deleteEmployee3.php" method="post">
			<!-- $mwid mag niet meer gewijzigd worden -->
			<input type="hidden" name="employeeIdVak" value=" <?php echo $employeeId ?> ">
			<!-- 2x verwijderBox om nee of ja door te kunnen geven -->
			<input type="hidden" 	name="verwijderBox" value="nee">			
			<input type="checkbox" 	name="verwijderBox" value="ja">
			<label for="verwijderBox"> delete this employee.</label><br/><br/>
			<input type="submit"><br/><br/>
		</form>

		<a href="medewerkermenu.html">Terug naar het hoofdmenu</a>
	</body>	