<?php
session_start();

$msg = null;
$_SESSION['email'] = "";
$_SESSION['password'] = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-btn']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
    include __DIR__ . "/../config.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    if ($password != $confirmPassword) {
        $msg = "Password not match...";
        return;
    }

    try {
        //checking exiting user
        $sql = $conn->prepare("SELECT COUNT(*) AS 'count' FROM users WHERE email = :email");
        $sql->bindParam(":email", $email);
        $exe = $sql->execute();
        $count = $sql->fetch(PDO::FETCH_OBJ)->count;

        if ($count > 0) {
            $msg = "User already exit";
            return;
        }

        // navigate to add profile page if auth is correct
        header('location: addProfile.php');
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $t) {
        $msg = $t->getMessage();
    }
}
