<?php
include "../main-navbar.php";
?>
<!doctype html>
<html>
<head>
</head>
    <body>

    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
        <h2><a href="?" class="active">go back to route</a></h2>
        </div>
        <h1>Add a route</h1>
        <form action="routeCreate2.php" method="post">
            <label for "beginPointField">beginPoint: </label>
            <input type = "text" name = "beginPointField"></input>
            <br/>
            <label for "endPointField">endPoint: </label>
            <input type = "text" name = "endPointField"></input>
            <br/>
            <label for "locationField">location: </label>
            <input type = "text" name = "locationField"></input>
            <br/>
            <label for "routeNameField">routeName: </label>
            <input type = "text" name = "routeNameField"></input>
            <input type="submit">
            <br/>

        </form>
    </div>
    <footer>  </footer>
    </body>
</html>
