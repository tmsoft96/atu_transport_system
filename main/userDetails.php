<?php
session_start();
include __DIR__ . "/../config.php";


if (isset($_SESSION['logged']) && !isset($_POST['submit-update'])) {
    $email = $_SESSION['email'];
    $sql = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindParam(":email", $email);
    $exe = $sql->execute();

    if (!$exe) {
        throw new LogicException("Error loading data...");
    }

    $user = $sql->fetch(PDO::FETCH_OBJ);

    $userId = $user->id;
    $profileImage = $user->image;
    $name = $user->name;
    $phone = $user->phone;
    $email = $user->email;
    $address = $user->address;
    $kinName = $user->kin_name;
    $kinEmail = $user->kin_email;
    $kinPhone = $user->kin_phone;
    $_SESSION['profilePic'] = $profileImage;
}

$msg = null;

if (isset($_POST['submit-update'])) {
    $_SESSION['msg_update'] = null;
    $id = $_POST['user-id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $kinName = $_POST['kin-name'];
    $kinPhone = $_POST['kin-phone'];
    $kinEmail = $_POST['kin-email'];

    try {
        //updating user
        $r_sql = $conn->prepare("UPDATE users SET name = :name, phone = :phone, email = :email, address = :address, kin_name = :kin_name, kin_email = :kin_email, kin_phone = :kin_phone WHERE id = :id");
        $r_sql->bindParam(":name", $name);
        $r_sql->bindParam(":phone", $phone);
        $r_sql->bindParam(":email", $email);
        $r_sql->bindParam(":address", $address);
        $r_sql->bindParam(":kin_name", $kinName);
        $r_sql->bindParam(":kin_email", $kinEmail);
        $r_sql->bindParam(":kin_phone", $kinPhone);
        $r_sql->bindParam(":id", $id);
        $reg_exe = $r_sql->execute();

        if (!$reg_exe) {
            throw new LogicException("Unable to update your account");
        }

        $_SESSION['msg_update'] = "Account updated successfully";

        //redirecting user to my account page
        header("location: ../myAccount.php");
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_password']) && isset($_POST['password'])  && isset($_POST['new-password'])  && isset($_POST['confirm-password']) && isset($_POST['user-id'])) {
    $_SESSION['msg_update'] = null;
    try {
        $userId = $_POST['user-id'];
        $password = $_POST['password'];
        $newPassword = $_POST['new-password'];
        $confirmPassword = $_POST['confirm-password'];

        //checking user if old password = current password entered
        $sql = $conn->prepare("SELECT * FROM users WHERE id = :id");
        $sql->bindParam(":id", $userId);
        $sql->execute();

        $user = $sql->fetch(PDO::FETCH_OBJ);

        if ($newPassword != $confirmPassword) {
            throw new LogicException("Password do not match");
        }

        if (!password_verify($password, $user->password)) {
            throw new LogicException("Wrong password entered");
        }

        //updating user password
        //encripting password
        $pass = password_hash($newPassword, PASSWORD_DEFAULT);
        $u_sql = $conn->prepare("UPDATE users SET password = :password WHERE id = :id");
        $u_sql->bindParam(":password", $pass);
        $u_sql->bindParam(":id", $userId);
        $up_exe = $u_sql->execute();

        if (!$up_exe) {
            throw new LogicException("Unable to reset password");
        }

        $_SESSION['msg_update'] = "Password reset successfully";

        header("location: myAccount.php");
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $t) {
        $msg = $t->getMessage();
    }
}
