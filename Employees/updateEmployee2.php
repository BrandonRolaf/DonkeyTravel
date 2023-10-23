<!doctype html>
<html>
	<head>
		<title>update employee 2</title>
	</head>
	<body>
		<h1>update employee 2</h1>
		
		<?php
			require "Employee.php";					// nodig om object te maken
			$employeeId = $_POST["employeeIdVak"];	// uitlezen vakje van deletemedewerkerForm1 
			$employee1 = new Employee();				// object aanmaken
			$employee1->searchEmployee($employeeId);	
			// properties in variabelen zetten
			$name=$employee1->get_name();
			$email=$employee1->get_email();
			$bankdetails=$employee1->get_Bankdetails();
			$address=$employee1->get_Address();
            $postalcode=$employee1->get_Postalcode();
            $telnumber=$employee1->get_Telnumber();

		?>
		
		<form action="updateEmployee3.php" method="post">
			<!-- $mwid mag niet meer gewijzigd worden -->
			<br>
            <?php echo $employeeId ?>
            <input type="hidden" name="employeeIdVak" value="<?php echo $employeeId;?>"><br>
			<label for="employeenameVak">Name:</label>
            <input type="text"   name="employeenameVak" value="<?php echo $name;?>"><br/>
			<label for="employeeemailVak">Email:</label>
			<input type="text"   name="employeeemailVak" value="<?php echo $email;?>"><br/>
			<label for="employeebankdetailsVak">employee bankdetails:</label>
            <input type="text"   name="employeebankdetailsVak" value="<?php echo $bankdetails;?>"><br/>
			<label for="employeeaddressVak">address:</label>
            <input type="text"   name="employeeaddressVak" value="<?php echo $address;?>"><br/>
            <label for="employeepostalcodeVak">postalcode:</label>
            <input type="text"   name="employeepostalcodeVak" value="<?php echo $postalcode;?>"><br/>
            <label for="employeetelnumberVak">telephone number:</label>
            <input type="text"   name="employeetelnumberVak" value="<?php echo $telnumber;?>"><br/>
			<input type="submit"><br/><br/>
		</form>

		<a href="medewerkermenu.html">Terug naar het hoofdmenu</a>
	</body>	