<?php
require "../navbar.php";
require "../connect.php";
?>
<html>
<head>
    <title>Update Customer</title>
</head>
<body>
<h1>Update Customer</h1>

<?php
require "Customer.php";
$name = $_POST["name"];
$customer = new Customer();
$customer->searchCustomer($name);

$name = $customer->get_name();
$address = $customer->get_address();
$email = $customer->get_email();
$cellNumber = $customer->get_cellNumber();
?>
<div class="formCreate">
    <form action="updateCustomer3.php" method="post">
        <?php echo "Name: " . $name; ?>
        <input type="hidden" name="name" value="<?php echo $name; ?>"><br/>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>"><br/>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>"><br/>

        <label for="cellNumber">Phone Number:</label>
        <input type="text" name="cellNumber" value="<?php echo $cellNumber; ?>"><br/>

        <input type="submit" value="Edit"><br/><br/>
    </form>

    <a href="../homepage.php">Back to main menu</a>
</body>
</html>
