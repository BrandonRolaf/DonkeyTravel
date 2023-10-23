<!doctype html>
<html>
<head>
    <title>Read Employee</title>
</head>
<body>
<h1>Read Employee</h1>
<p></p>

<?php
    require "Employee.php";
    $medewerker1 = new Employee();
    $medewerker1->readEmployee();



?>
<a href="medewerkermenu.html">Terug naar het hoofdmenu</a>
</body>








</html>