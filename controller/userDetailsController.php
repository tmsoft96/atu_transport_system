<?php
$email = $_SESSION['email'];
if (isset($_SESSION['logged'])) {
    include __DIR__ . "/../config.php";

    $sql = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindParam(":email", $email);
    $exe = $sql->execute();

    if (!$exe) {
        throw new LogicException("Error loading data...");
    }

    $user = $sql->fetch(PDO::FETCH_OBJ);

    $profileImage = $user->image;
    $name = $user->name;
    $_SESSION['profilePic'] = $profileImage;
}
