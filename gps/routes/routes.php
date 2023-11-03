<?php

require_once "../connect.php";

class route
{

    // properties -- eigenschappen ----
    public $beginPoint;
    public $endPoint;
    public $location;
    public $routeName;


    //methode -- functies
    // constructor
    function __construct($beginPoint = NULL, $endPoint = NULL, $location = NULL,
                         $routeName = NULL)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
        $this->location = $location;
        $this->routeName = $routeName;

    }

    function set_beginPoint($beginPoint)
    {
        $this->beginPoint = $beginPoint;
    }

    function set_endPoint($endPoint)
    {
        $this->endPoint = $endPoint;
    }

    function set_location($location)
    {
        $this->location = $location;
    }

    function set_routeName($routeName)
    {
        $this->routeName = $routeName;
    }



    // getters
    function get_beginPoint()
    {
        return $this->beginPoint;
    }

    function get_endPoint()
    {
        return $this->endPoint;
    }

    function get_location()
    {
        return $this->location;
    }

    function get_routeName()
    {
        return $this->routeName;
    }





    public function afdrukken()
    {
        echo $this->get_beginPoint();
        echo "<br/>";
        echo $this->get_endPoint();
        echo "<br/>";
        echo $this->get_location();
        echo "<br/>";
        echo $this->get_routeName();
        echo "<br/>";

    }

    public function createRoute()
    {
        global $conn;
        // info from objects in variables
        $routeID = NULL;
        $beginPoint = $this->get_beginPoint();
        $endPoint = $this->get_endPoint();
        $location = $this->get_location();
        $routeName = $this->get_routeName();


        // statement for the table
        $sql = $conn->Prepare("INSERT into route
values (:routeID,:beginPoint, :endPoint, :location, :routeName)");
// variabelen in de statement zetten
        $sql->bindParam(":routeID", $routeID);
        $sql->bindParam(":beginPoint", $beginPoint);
        $sql->bindParam(":endPoint", $endPoint);
        $sql->bindParam(":location", $location);
        $sql->bindParam(":routeName", $routeName);
        $sql->execute();
        //notification
        echo "The route has been added: </br>";

    }

    public function readRoute()
    {
        global $conn;
        // statement
        $sql = $conn->prepare(" SELECT * FROM route");
        $sql->execute();
        foreach ($sql as $route) {
            echo $route["routeID"] . " - ";                         // geen eigenscap van object student
            $this->set_beginPoint($route["beginPoint"]);
            echo $route["beginPoint"] . " - ";
            $this->set_endPoint($route["endPoint"]);
            echo $route["endPoint"] . " - ";
            $this->set_location($route["location"]);
            echo $route["location"] . " - ";
            $this->set_routeName($route["routeName"]);
            echo $route["routeName"] . " - ";

        }
    }

    public function searchRoute($routeID)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from route
                               where routeID = :routeID");
        // putting variables in statement
        $sql->bindParam(":routeID", $routeID);
        $sql->execute();
        // info from the array in object and print
        foreach ($sql as $route) {
            echo $route["routeID"] . "<br>";
            echo $this->beginPoint = $route["beginPoint"] . "";
            echo "<br>";
            echo $this->endPoint = $route["endPoint"] . "";
            echo "<br>";
            echo $this->location = $route["location"] . "";
            echo "<br>";
            echo $this->routeName = $route["routeName"] . "";
            echo "<br>";

        }
    }

    public function deleteRoute($routeID)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM route
        where routeID = :routeID");
        // variables in a statement
        $sql->bindParam(":routeID", $routeID);
        $sql->execute();
    }

    public function updateRoute($routeID)
    {
        global $conn;
        // gegevens uit het object in variabelen zetten
        $routeID;
        $beginPoint = $this->get_beginPoint();
        $endPoint = $this->get_endPoint();
        $location = $this->get_location();
        $routeName = $this->get_routeName();

        // route maken
        $sql = $conn->prepare("
									update route
									set beginPoint=:beginPoint, endPoint=:endPoint, location=:location, 
									    routeName=:routeName   
									where routeID=:routeID
								 ");
        // variabelen in de statement zetten

        $sql->bindParam(":routeID", $routeID);
        $sql->bindParam(":beginPoint", $beginPoint);
        $sql->bindParam(":endPoint", $endPoint);
        $sql->bindParam(":location", $location);
        $sql->bindParam(":routeName", $routeName);

        $sql->execute();
    }
}
