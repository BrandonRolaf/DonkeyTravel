<?php
include "../navbar.php";
require "Customer.php";

$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$cellNumber = $_POST["cellNumber"];

$customer1 = new Customer ($name, $email, $address, $cellNumber);
$customer1->createCustomer();
$customer1->printCustomer();

?>


<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>
<body>
<h1></h1>
<button><a href="../homepage.php">Back to main menu</a></button>
</body>
</html>