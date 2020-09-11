<?php
session_start();

$msg = null;
$_SESSION['email'] = "";
$_SESSION['password'] = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-btn']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    if ($password != $confirmPassword){
        $msg = "Password not match...";
    }

    header('location: addProfile.php');
}