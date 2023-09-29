<?php
    require "../navbar.php";

    include "Booking.php";
    $bookingPin = $_POST["bookingPinForm"];
    $startDate = $_POST["startDateForm"];
    $endDate = $_POST["endDateForm"];

    $booking = new Booking($startDate, $endDate, $bookingPin);
    $booking->updateBooking($bookingPin);
    echo "Booking PIN: " . $bookingPin . "<br/>";
    echo "Starting Date: " . $startDate . "<br/>";
    echo "End Date: " . $endDate . "<br/>";

    ?>
    <body>

    <a href="../homepage.php">Back to main menu</a>
</body>
