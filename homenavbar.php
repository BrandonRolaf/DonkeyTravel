<?php
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>

<div class="navbar">
    <a href="homepage.php"><img src="donkeytravel-logo.jpg" height="90" width="125"></a>
    <div class="dropdown">
        <button class="dropbtn">
            <i class="down">Booking</i>
        </button>
        <div class="dropdown-content">
            <a href="Bookings/createBooking.php">Book a trip</a>
            <a href="Bookings/readBooking.php">See all bookings</a>
            <a href="Bookings/updateBooking.php">Change your booking</a>
            <a href="Bookings/deleteBooking.php">Delete your booking</a>
            <a href="Bookings/searchBooking.php">Search your booking</a>

        </div>
    </div>

    <div class="dropdown2">
        <button class="dropbtn2">
            <i class="down2">Customer</i>
        </button>
        <div class="dropdown-content2">
            <a href="customers/createCustomer.php">Create customer</a>
            <a href="customers/readCustomer.php">Read customer</a>
            <a href="customers/updateCustomer.php">Update customer</a>
            <a href="customers/deleteCustomer.php">Delete customer</a>
            <a href="customers/searchCustomer.php">Search Customer</a>
        </div>
    </div>

    <div class="dropdown3">
        <button class="dropbtn3">
            <i class="down3">Employees</i>
        </button>
        <div class="dropdown-content3">
            <a href="Employees/createEmployee1.html">Create Employee</a>
            <a href="Employees/readEmployee.php">    Read Employee</a>
            <a href="Employees/updateEmployee1.php"> Update Employee</a>
            <a href="Employees/deleteEmployee1.php"> Delete Employee</a>
            <a href="Employees/searchEmployee1.php"> Search Employee</a>
        </div>
    </div>

    <div class="dropdown4">
        <button class="dropbtn4">
            <i class="down4">User</i>
        </button>
        <div class="dropdown-content4">
            <a href="Users/userCreate1.php">Create User</a>
            <a href="Users/userUpdate1.php">Update User</a>
            <a href="Users/userDelete1.php">Delete User</a>
            <a href="Users/userSearch1.php">Search User</a>
        </div>
    </div>

    <div class="dropdown5">
        <button class="dropbtn5">
            <i class="down5">Routes</i>
        </button>
        <div class="dropdown-content5">
            <a href="routes/routeCreate1.php">Create Route</a>
            <a href="routes/routeRead.php">Read Route</a>
            <a href="routes/routeUpdate1.php">Update Route</a>
            <a href="routes/routeDelete1.php">Delete Route</a>
            <a href="routes/routeSearch1.php">Search</a>
        </div>
    </div>

    <div class="loginBtn">
        <a href="login.php">Login</a>
    </div>
</div>
</body>
</html>