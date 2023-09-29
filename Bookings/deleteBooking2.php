<?php
require "../navbar.php";
?>
<html>

<head>
    <title>Cancel Booking</title>
</head>
<body>
<div class="formCreate">
    <h1>Cancel Booking</h1>
    <?php
    require "Booking.php";
    require "..\connect.php";


    $bookingPin = $_POST["bookingPinForm"];
    $booking = new Booking();
    $booking->searchBooking($bookingPin);
    $booking->printBooking();
    ?>


    <form action="deleteBooking3.php" method="post">
        <input type="hidden" name="bookingPinForm" value=" <?php echo $bookingPin ?>">
        <input type="hidden" name="deleteBox" value="No">
        <input type="hidden" name="deleteBox" value="Yes">
        <label for="deleteBox"> Are you sure?</label><br><br>
        <input type="submit" value="Delete"><br><br>
    </form>

    <a href="../homepage.php">Back to main menu</a>
</body>

</html>
