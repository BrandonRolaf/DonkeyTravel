<?php
require "../main-navbar.php";
?>
<html>

<head>
    <title>Delete Customer</title>
</head>
<body>
<div>
    <h1>Delete Customer</h1>
    <?php
    require "Customer.php";

    $customerId = $_POST["customerId"];
    $delete = $_POST["deleteBox"];

    if ($delete=="Yes")  {
        echo "Customer deleted.<br>";
        $customer = new Customer();
        $customer->deleteCustomer($customerId);
    }

    else    {
        echo "Failed to delete customer. <br>";
    }

    ?>
    <a href="../homepage.php">Back to main menu</a>
</body>
</html>



