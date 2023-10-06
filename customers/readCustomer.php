<?php
include("../connect.php");
include("../navbar.php");
include("Customer.php");
?>
<!doctype html>
<html lang="nl">
<link rel="stylesheet" href="../style.css">
<head>
    <title>Customers</title>
</head>
<body>
<div class="formCreate">
    <a href="../homepage.php">Back to main menu</a><br>
    <?php
    $customer = new Customer();
    $customer->readCustomer();
    ?>
</body>
</html>