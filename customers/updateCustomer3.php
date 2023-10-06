<?php
require "../navbar.php";

include "Customer.php";
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$cellNumber = $_POST["cellNumber"];

$customer = new Customer($name, $address, $email, $cellNumber);
$customer->updateCustomer($name);
echo "Name: " . $name . "<br/>";
echo "Address: " . $address . "<br/>";
echo "Email: " . $email . "<br/>";
echo "Phone Number: " . $cellNumber . "<br/>";

?>
<body>

<a href="../homepage.php">Back to main menu</a>
</body>
