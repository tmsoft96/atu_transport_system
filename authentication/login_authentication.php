<?php
session_start();
include __DIR__ . "/../base_url.php";

if (isset($_SESSION['logged'])) {
    header('location: ' . APP_URL . '/index.php');
    exit;
}

$msg = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-btn']) && isset($_POST['email']) && isset($_POST['password'])) {
    include __DIR__ . "/../config.php";

    try {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $sql->bindParam(":email", $email);
        $exe = $sql->execute();

        if (!$exe) {
            throw new LogicException("Wrong email entered");
        }

        $user = $sql->fetch(PDO::FETCH_OBJ);

        if (!password_verify($pass, $user->password)) {
            throw new LogicException("Wrong password entered");
        }

        $_SESSION['email'] = $user->email;
        $_SESSION['userId'] = $user->id;
        $_SESSION['profilePic'] = $user->image;
        $_SESSION['name'] = $user->name;
        $_SESSION['role'] = $user->role;
        $_SESSION['msg'] = null;
        $_SESSION['logged'] = true;
        header('location: ' . APP_URL . '/index.php');

        exit;

    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $t) {
        $msg = $t->getMessage();
    }
}
