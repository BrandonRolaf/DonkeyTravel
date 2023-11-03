<?php
include "../main-navbar.php";
require "Booking.php";

$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$bookingPin = $_POST["bookingPin"];

$booking1 = new Booking ($startDate, $endDate, $bookingPin);
$booking1->createBooking();
$booking1->printBooking();

?>


<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
</head>
<body>
<h1></h1>
<button><a href="../homepage.php">Back to main menu</a></button>
</body>
</html>