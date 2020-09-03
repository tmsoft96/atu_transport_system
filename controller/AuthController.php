<?php
function checkUserIsLoggedIn()
{
    if (!isset($_SESSION['logged'])) {
        header('location: ' . APP_URL . '/login.php');
        exit;
    }
}