<?php
include "../main-navbar.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>New Customer</title>
</head>
<body background="">
<div class="formContent">
    <div class="formCreate">
        <h1>New Customer</h1>
        <form action="createCustomer2.php" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required><br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required><br>
            <label for="text">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="cellNumber">Phone Number:</label>
            <input type="text" name="cellNumber" id="cellNumber" required><br>
            <div class="submitButton">
                <input type="submit" value="Create" <div class="formCreate">
                </div>
        </form>
    </div>

</body>
</html>