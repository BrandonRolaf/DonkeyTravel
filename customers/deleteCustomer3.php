<?php
require "../navbar.php";
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

    $name = $_POST["name"];
    $delete = $_POST["deleteBox"];

    if ($delete=="Yes")  {
        echo "Customer deleted.<br>";
        $customer = new Customer();
        $customer->deleteCustomer($name);
    }

    else    {
        echo "Failed to delete customer. <br>";
    }

    ?>
    <a href="../homepage.php">Back to main menu</a>
</body>
</html>



