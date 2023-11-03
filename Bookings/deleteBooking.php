<?php
require "../main-navbar.php";
require "../connect.php";
?>
<html>
<head>
    <title>Cancel Booking</title>
</head>
<body>
<div class="formCreate">
    <h1>Cancel Booking</h1>
    <form action="deleteBooking2.php" method="post">
        <label for="bookingPinForm">Booking PIN: </label>
        <input type="text" id="bookingPinForm" name="bookingPinForm">
        <input type="submit" value="Delete">



    </form>

    <a href="../homepage.php"><br>Back to main menu</a>
</body>
</html>