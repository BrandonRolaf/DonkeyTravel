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
    $delete = $_POST["deleteBox"];

    if ($delete == "ja") {
        echo "This route has been deleted <br/>";
        $route1 = new route();
        $route1->deleteRoute($routeID);
    } else {
        echo "This route hasn't been deleted. <br/>";
    }
    ?>

</body>
<footer>  </footer>
</html>
