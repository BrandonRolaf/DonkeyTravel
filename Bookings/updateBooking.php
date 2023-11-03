<?php
    require "../main-navbar.php";
    require "../connect.php";
?>
<html>
    <head>
        <title>Update Booking</title>
    </head>
    <body>
        <h1>Update your Donkey Travel</h1>
        <div class="formCreate">
            <form action="updateBooking2.php" method="post">
                <label for="bookingPin">Booking PIN:</label>
                <input type="number" id="bookingPin" name="bookingPinForm">
                <input type="submit" value="Edit">
            </form>
            <a href="../homepage.php"><br/>Back to main menu</a>
    </body>
</html>
