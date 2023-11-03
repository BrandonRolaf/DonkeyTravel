<?php
require "../main-navbar.php";
require "../connect.php";
?>
<html>
<head>
    <title>Delete Customer</title>
</head>
<body>
<div class="formCreate">
    <h1>Delete Customer</h1>
    <form action="deleteCustomer2.php" method="post">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Delete">



    </form>

    <a href="../homepage.php"><br>Back to main menu</a>
</body>
</html>