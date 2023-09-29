<?php
require "navbar.php";
?>
<html>
    <head>
    <title>Booking Search Results</title>
    </head>

    <body>
    <h1>Results: </h1>

    <?php
    require "Booking.php";
    require "../connect.php";

    $bookingPin = $_POST["bookingPinForm"];
    $booking = new Booking();

    try {
        echo '<div class="formCreate">';
        $booking->searchBooking($bookingPin);
        $booking->printBooking();
        echo '<a href="../homepage.php">Back to main menu</a>' .
            '</div>';
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
    </body>

</html>
