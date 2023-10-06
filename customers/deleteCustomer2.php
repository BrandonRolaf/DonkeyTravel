<?php
require "../navbar.php";
?>
<html>

<head>
    <title>Delete Customer</title>
</head>
<body>
<div class="formCreate">
    <h1>Delete Customer</h1>
    <?php
    require "Customer.php";
    require "..\connect.php";


    $name = $_POST["name"];
    $customer = new Customer();
    $customer->searchCustomer($customer);
    $customer->printCustomer();
    ?>


    <form action="deleteCustomer3.php" method="post">
        <input type="hidden" name="name" value=" <?php echo $name ?>">
        <input type="hidden" name="deleteBox" value="No">
        <input type="hidden" name="deleteBox" value="Yes">
        <label for="deleteBox"> Are you sure?</label><br><br>
        <input type="submit" value="Delete"><br><br>
    </form>

    <a href="../homepage.php">Back to main menu</a>
</body>

</html>
