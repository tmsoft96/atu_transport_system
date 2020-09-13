<?php
include __DIR__ . "/../config.php";
session_start();

$sql = $conn->prepare("SELECT * FROM route");
$exe = $sql->execute();

if (!$exe) {
    throw new LogicException("Error loading bus...");
}

$routes = $sql->fetchAll();

$msg = null;

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["submit-home-search"])) {
    $msg = null;
    $location = $_GET["location"];
    $destination = $_GET["destination"];
    $date = $_GET["date"];

    if ($location == null) {
        $msg = "Select your current location";
        return;
    } else if ($destination == null) {
        $msg = "Select your destination";
        return;
    } else if ($date == null) {
        $msg = "Select date";
        return;
    }
    try {
        $sql = $conn->prepare("SELECT * FROM route WHERE current_location = :location AND bus_stops = :destination AND departure_date = :date");
        $sql->bindParam(":location", $location);
        $sql->bindParam(":destination", $destination);
        $sql->bindParam(":date", $date);
        $exe = $sql->execute();

        if (!$exe) {
            throw new LogicException("Error loading data...");
        }

        $trip = $sql->fetch(PDO::FETCH_OBJ);

        if ($trip == null) {
            $msg = "No buses found between these two place. Please try a different date or search with an alternate route";
            return;
        }

        $tripId = $trip->id;

        //redirecting
        header("location: routeDetails.php?trip_id=" . $tripId);
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
    }
}
