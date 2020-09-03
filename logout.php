<?php
session_start();
include __DIR__ . "/base_url.php";

$_SESSION = [];
session_destroy();
session_unset();

setcookie(session_name(), "", (time() - 1), "/");

header("location: " . APP_URL . "/login.php");
