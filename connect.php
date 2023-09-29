<?php
// maakt verbinding met database 'donkey travel'
//
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// maakt verbinding met database 'donkey travel'
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$dbname = "donkey_travel";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername; 
        dbname=$dbname", $username, $password);

<<<<<<< HEAD
    //echo "Connectie gelukt! </br>";
} catch (PDOException $e) {
    echo "Connection failed:" . $e->getMessage();
}
=======
    // echo "Connectie gelukt! </br>";
} catch (PDOException $e) {
    echo "Connection failed:" . $e->getMessage();
}
>>>>>>> 04f707e3bd5bb6dc6c80809f7b533a544bae6e3b
