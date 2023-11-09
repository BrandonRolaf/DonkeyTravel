<?php
require "../main-navbar.php";
?>
    <html>
    <head>
        <title>Customer Search Results</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

    <body>
    <h1>Results: </h1>

    <?php
    require "Customer.php";
    require "../connect.php";

    $customerId = $_POST["customerId"];
    $customer = new Customer();

    try {
        echo '<div class="formCreate">';
        $customer->searchCustomer($customerId);
        $customer->printCustomer();
        echo '<a href="../homepage.php">Back to main menu</a>' .
            '</div>';
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
    </body>

    </html>
<?php
