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

        <?php
            require "Booking.php";
            $bookingPin = $_POST["bookingPinForm"];
            $booking = new Booking();
            $booking->searchBooking($bookingPin);

            $startDate = $booking->get_startDate();
            $endDate = $booking->get_endDate();
            $bookingPin = $booking->get_bookingPin();
        ?>
        <div class="formCreate">
        <form action="updateBooking3.php" method="post">
            <?php echo "Booking PIN: " . $bookingPin; ?>
            <input type="hidden" name="bookingPinForm" value="<?php echo $bookingPin; ?>"><br/>

            <label for="startDate">Starting Date:</label>
            <input type="text" name="startDateForm" value="<?php echo $startDate; ?>"><br/>

            <label for="endDate">End Date:</label>
            <input type="text" name="endDateForm" value="<?php echo $endDate; ?>"><br/>

            <input type="submit" value="Edit"><br/><br/>
        </form>

        <a href="../homepage.php">Back to main menu</a>
    </body>
    </html>
