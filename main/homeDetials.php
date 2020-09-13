<?php
include __DIR__ . "/../config.php";
session_start();

$sql = $conn->prepare("SELECT * FROM route");
$exe = $sql->execute();

if (!$exe) {
    throw new LogicException("Error loading bus...");
}

$routes = $sql->fetchAll();
// print_r($routes);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["submit-home-search"])) {
    $location = $_GET["location"];
    $destination = $_GET["destination"];
    $date = $_GET["date"];

    //redirecting
    header("location: routeDetails.php?location=" . $location . "&destionation=" . $destination . "&date=" . $date);
}
