<?php

$servername = "localhost:3306";
$username = "db103609";
$password = "makkelijk2021";
$database = "103609_beroeps";



// opties voor pbo
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // fouten gooien als uitzonderingen
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}