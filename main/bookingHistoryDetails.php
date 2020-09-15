<?php
include __DIR__ . "/../config.php";
session_start();

$msg = null;

$userId = $_SESSION["userId"];
$sql = $conn->prepare("SELECT * FROM schedules WHERE user_id = :user_id");
$sql->bindParam(":user_id", $userId);
$exe = $sql->execute();

if (!$exe) {
    throw new LogicException("Error loading schedules...");
}

$schedules = $sql->fetchAll();

if ($schedules == null) {
    $msg = "No schedules yet...";
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["booking-id"]) && isset($_GET["cancel-booking"])) {
    $bookingId = $_GET["booking-id"];

    $r_sql = $conn->prepare("DELETE FROM schedules WHERE id = :booking_id");
    $r_sql->bindParam(":booking_id", $bookingId);
    $exe = $r_sql->execute();

    if (!$exe) {
        throw new LogicException("Error canceling booking...");
    }

    $msg = "Booking cancel succesfully";

    //redirecting
    header("location: bookingHistory.php");
}
