<?php
    include "../main-navbar.php";
?>
<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="?" class="active">go back to routes</a></h2>
    </div>
    <?php
    require "routes.php";
    // info from the array into the variables
    $routeID = $_POST["routeIDField"];
    $beginPoint = $_POST["beginPointField"];
    $endPoint = $_POST["endPointField"];
    $location = $_POST["locationField"];
    $routeName = $_POST["routeNameField"];


    // making an object ---------------------------------------------------
    $route1 = new route($beginPoint, $endPoint, $location, $routeName); // makes object
    $route1->updateRoute($routeID);                   // changes the tableinfo voor objectinfo
    echo "This is the updated information: <br/>";
    echo $routeID ."<br/>";
    $route1->afdrukken();                           // drukt object af

    ?>
</div>
</body>
<footer> </footer>
</html>
