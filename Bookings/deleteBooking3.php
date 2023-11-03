<?php
require "../main-navbar.php";
?>
<html>

<head>
    <title>Cancel Booking</title>
</head>
<body>
<div>
    <h1>Cancel Booking</h1>
    <?php
    require "Booking.php";

    $bookingPin = $_POST["bookingPinForm"];
    $delete = $_POST["deleteBox"];

    if ($delete=="Yes")  {
        echo "Your booking has been canceled.<br>";
        $booking = new Booking();
        $booking->deleteBooking($bookingPin);
    }

    else    {
        echo "Failed to cancel Donkey Travel. <br>";
    }

    ?>
    <a href="../homepage.php">Back to main menu</a>
</body>
</html>



