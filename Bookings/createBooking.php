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
    <title>New Booking</title>
</head>
<body background="">
<div class="formContent">
    <div class="formCreate">
        <h1>Book a trip</h1>
        <form action="createBooking2.php" method="post">
            <label for="startDate">Starting Date: </label>
            <input type="date" name="startDate" id="startDate" required><br>
            <label for="endDate">Check Out Date:</label>
            <input type="date" name="endDate" id="endDate" required><br>
            <label for="bookingPin">Create a PIN:</label>
            <input type="number" name="bookingPin" id="bookingPin" required><br>
            <div class="submitButton">
                <input type="submit" value="Create" <div class="formCreate">
                </div>
        </form>
    </div>

</body>
</html>