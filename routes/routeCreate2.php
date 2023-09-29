<!doctype html>

<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
        <h2><a href="?" class="active">go back to routes</a></h2>
        </div>
        <?php
        require "routes.php";

        // uitlezen vakjes van KlantenCreate1 -----
        $beginPoint=$_POST["beginPointField"];
        $endPoint=$_POST["endPointField"];
        $location=$_POST["locationField"];
        $routeName=$_POST["routeNameField"];


        // maken object -------------------------------
        $route1 = new route($beginPoint, $endPoint, $location, $routeName);
        $route1->createRoute();

        // afdrukken object ---------------------------

        $route1->afdrukken();
        ?>
    </div>
    </body>
<footer> </footer>
</html>
