<!doctype html>
<html>
	
	<head>
		<title>update leverancier formulier 3</title>
	</head>
	<body>
		<h1>update leverancier formulier 3</h1>
		
		<?php
			require "Employee.php";

            // gegevens uit de array in variabelen stoppen
		    $employeeId = $_POST["employeeIdVak"];
			$naam = $_POST["employeenameVak"];
			$email = $_POST["employeeemailVak"];
			$bankdetails = $_POST["employeebankdetailsVak"];
            $adress = $_POST["employeeaddressVak"];
			$postalcode = $_POST["employeepostalcodeVak"];
			$telnumber = $_POST["employeetelnumberVak"];

			
            // maken object ---------------------------------------------------
			$employee1 = new Employee($naam, $email , $bankdetails, $adress, $postalcode, $telnumber); // maakt object
			$employee1->updateEmployee($employeeId);		           // vervangt de tabelgegevens voor objectgegevens
            echo "Dit zijn de gewijzigde gegevens: <br/>";
            echo $employeeId."<br/>";
			$employee1->afdrukken();	                       // drukt object af

		?>
		<a href="medewerkermenu.html">Terug naar het hoofdmenu</a>
	</body>
</html>