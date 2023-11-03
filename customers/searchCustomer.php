<?php

require "../main-navbar.php";
require "../connect.php";
?>

    <html lang="nl">
    <head>
        <title>Search Customer</title>
    </head>
    <body>
    <h1>Search Customer</h1>
    <div class="formCreate">
        <form action="searchCustomer2.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id = "name" name="name">
            <input type="submit" value="Search">
        </form>
        <a href="../homepage.php"><br/>Back to main menu</a>
    </body>
    </html>
<?php
