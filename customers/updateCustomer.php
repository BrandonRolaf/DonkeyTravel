<?php
require "../main-navbar.php";
require "../connect.php";
?>
<html>
<head>
    <title>Update Customer</title>
</head>
<body>
<h1>Update Customer</h1>
<div class="formCreate">
    <form action="updateCustomer2.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Edit">
    </form>
    <a href="../homepage.php"><br/>Back to main menu</a>
</body>
</html>
