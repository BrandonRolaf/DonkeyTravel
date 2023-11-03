<?php
include "../main-navbar.php";
?>
<!doctype html>
<html>
<body>
<link rel="stylesheet" href="">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="?" class="active">go back to routes</a></h2>
    </div>
    <?php
    require "routes.php";
    $routeID = $_POST["routeIDField"];
    $route1 = new route();
    $route1->searchRoute($routeID);

    ?>
</div>
</body>
<footer>  </footer>
</html>