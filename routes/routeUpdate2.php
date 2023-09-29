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

    require "routes.php";                    // neccessary to make an object
    $routeID = $_POST["routeIDField"];
    $route1 = new route();                // making the object
    $route1->searchRoute($routeID);

    // properties in variables
    $beginPoint = $route1->get_beginPoint();
    $endPoint = $route1->get_endPoint();
    $location = $route1->get_location();
    $routeName = $route1->get_routeName();

    ?>

    <form action="routeUpdate3.php" method="post">
        <!-- $routeID cant be changed anymore -->
        <input type="hidden" name="routeIDField" value="<?php echo $routeID;?>"><br>
        <input type="text"   name="beginPointField"  value="<?php echo $beginPoint;?>"><br>
        <input type="text"   name="endPointField"  value="<?php echo $endPoint;  ?> "><br>
        <input type="text"   name="locationField" value="<?php echo $location;  ?> "><br>
        <input type="text"   name="routeNameField"  value="<?php echo $routeName;  ?> "><br>

        <input type="submit"><br>

    </form>
</div>
</body>
<footer>  </footer>
</html>