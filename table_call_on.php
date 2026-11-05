<?php
require "database_connect.php";

//recepten aanroepen
$query = "SELECT * FROM `recepten`";
$recepten = $conn->prepare($query);
$recepten->execute();

$resultaten_recepten = $recepten->fetchAll(PDO::FETCH_ASSOC);
$aantal_recepten = count($resultaten_recepten);


//ingredienten aan roepen
$query = "SELECT * FROM `recepten_ingredienten`";
$ingredienten = $conn->prepare($query);
$ingredienten->execute();

$resultaten_ingredienten = $ingredienten->fetchAll(PDO::FETCH_ASSOC);
$aantal_ingredienten = count($resultaten_ingredienten);


// het stappen plan
$query = "SELECT * FROM `recepten_stappen`";
$stappen = $conn->prepare($query);
$stappen->execute();

$resultaten_stappen = $stappen->fetchAll(PDO::FETCH_ASSOC);
$aantal_stappen = count($resultaten_stappen);