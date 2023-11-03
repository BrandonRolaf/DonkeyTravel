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
    <h1>Look up a route</h1>
    <form action="routeSearch2.php" method="post">
        <label for="routeID">routeID:</label>
        <input type="text" id="routeID" name="routeIDField">
        <input type="submit">
        <br>
    </form>
</div>
</body>
<footer>  </footer>
</html>