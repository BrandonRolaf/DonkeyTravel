<?php
include "../main-navbar.php";
?>
<!doctype html>
<html>
	<head>
		<title>create employee formulier 2</title>
	</head>
	<body>
		<h1>create employee formulier 2</h1>

		<?php
			
			require "Employee.php";
			// uitlezen vakjes van createmedewerkerForm1 -----
			$name=$_POST["namevak"];
			$email=$_POST["emailvak"];
			$bankdetails=$_POST["bankdetailsvak"];
			$address=$_POST["addressvak"];
            $postalcode=$_POST["postalcodevak"];
            $telnumber=$_POST["telnumbervak"];

			echo "<br/><br/>";
			
			// maken object -------------------------------
			$employee1 = new Employee($name ,$email, $bankdetails, $address, $postalcode, $telnumber);
            $employee1->createEmployee();

			// afdrukken object ---------------------------
			echo "<br/><br/>";
			echo $employee1->afdrukken();
			
		?> 	
		<br>
		<a href="medewerkermenu.html">Terug naar het hoofdmenu</a>
	</body>
</html>
