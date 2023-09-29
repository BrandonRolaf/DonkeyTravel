<!DOCTYPE html>
<html lang="en">
<body>
<link rel="stylesheet" href="">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="?" class="active">go back to route</a></h2>
    </div>
    <h1>All the routes</h1>
    <?php
    require "routes.php";
    $route1 = new route();
    $route1->readRoute();
    ?>
</div>
</body>
<footer> </footer>
</html>
