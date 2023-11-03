<?php
include "../main-navbar.php";
?>
<!doctype html>
<html>
<body>
<link rel="stylesheet" href="?">
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

    <form action="routeDelete3.php" method="post">
        <!-- $routeID mag niet meer gewijzigd worden -->
        <input type="hidden" name="routeIDField" value=" <?php echo $routeID ?> ">
        <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
        <input type="hidden" name="deleteBox" value="nee">
        <input type="checkbox" name="deleteBox" value="ja">
        <label for="deleteBox">Delete this route.</label><br/><br/>
        <input type="submit"><br/><br/>
    </form>
</body>
<footer>  </footer>
</html>

