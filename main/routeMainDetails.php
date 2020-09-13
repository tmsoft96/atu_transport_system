<?php
include __DIR__ . "/../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["trip_id"])) {
    $tripId = $_GET["trip_id"];

    $sql = $conn->prepare("SELECT * FROM route WHERE id = :id");
    $sql->bindParam(":id", $tripId);
    $exe = $sql->execute();

    if (!$exe) {
        throw new LogicException("Error loading data...");
    }

    $tripDetail = $sql->fetch(PDO::FETCH_OBJ);

    $destination = $tripDetail->final_destinantion;
    $busStop = $tripDetail->bus_stops;
    $fee = $tripDetail->fee;
    $departureTime = $tripDetail->departure_time;
    $departureDate = $tripDetail->departure_date;
    $arrivalTime = $tripDetail->arrival_time;
    $arrivalDate = $tripDetail->arrival_date;
    $discount = $tripDetail->discount;
    $busId = $tripDetail->bus_id;
    $location = $tripDetail->current_location;

    $splitBusStop = explode(',', $busStop);
}
