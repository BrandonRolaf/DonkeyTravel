<?php
include "../main-navbar.php";
?>
<!doctype html>
<html>
    <head>
        <title>Search 2</title>
    </head>
    <body>
        <h1>Search 2</h1>
        <?php 
        require "Employee.php";
        $employeeId = $_POST["employeeIdVak"];
        $employee1 = new Employee();
        $employee1->searchEmployee($employeeId);
        ?>
        <br>
        <a href="medewerkermenu.html">Terug naar het hoofdmenu</a>











    </body>
</html>