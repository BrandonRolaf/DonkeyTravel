<?php
// Databasegegevens
$host = 'localhost'; // De hostnaam van de database (meestal localhost)
$dbname = 'donkey_travel'; // De naam van de database
$username = 'root'; // Jouw databasegebruikersnaam
$password = "root";

try {
    // Maak een PDO-verbinding
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Zet PDO in de juiste modus om fouten te rapporteren
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Als er een fout optreedt bij het maken van de verbinding, toon dan een foutbericht
    die("Fout bij het verbinden met de database: " . $e->getMessage());
}

$getlonglat = $conn->prepare("SELECT * FROM route WHERE routeID = :nummer");
$getlonglat->bindParam(":nummer", $_GET['id']);
$getlonglat->execute();
$longlat = $getlonglat->fetch(PDO::FETCH_ASSOC);
echo $longlat = json_encode($longlat);






