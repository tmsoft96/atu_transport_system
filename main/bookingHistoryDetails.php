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

if ($schedules == null){
    $msg = "No schedules yet...";
}
