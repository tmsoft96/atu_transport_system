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
