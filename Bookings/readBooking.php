<?php
include("../connect.php");
include("../main-navbar.php");
include("Booking.php");
?>
<!doctype html>
<html lang="nl">
<link rel="stylesheet" href="../styling.css">
<head>
    <title>Planets</title>
</head>
<body>
<div class="formCreate">
    <a href="../homepage.php">Back to main menu</a><br>
    <?php
    $booking = new Booking();
    $booking->readBooking();
    ?>
</body>
</html>