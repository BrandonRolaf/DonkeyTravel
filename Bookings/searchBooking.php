<?php

require "../main-navbar.php";
require "../connect.php";
?>

<html lang="nl">
<head>
    <title>Search Booking</title>
</head>
<body>
<h1>Search Booking</h1>
<div class="formCreate">
    <form action="searchBooking2.php" method="post">
        <label for="bookingPin">Booking PIN:</label>
        <input type="text" id = "bookingPin" name="bookingPinForm">
        <input type="submit" value="Search">
    </form>
    <a href="../homepage.php"><br/>Back to main menu</a>
</body>
</html>
