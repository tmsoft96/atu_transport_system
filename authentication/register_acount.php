<?php
session_start();
$msg = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-btn']) && isset($_POST['name']) && isset($_POST['profile-pic']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['kin-name']) && isset($_POST['kin-phone']) && isset($_POST['kin-email'])) {
    include __DIR__ . "/../config.php";
    try {
        $name = $_POST['name'];
        $profilePic = $_POST['profile-pic'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_SESSION['password'];
        $address = $_POST['address'];
        $kinName = $_POST['kin-name'];
        $kinPhone = $_POST['kin-phone'];
        $kinEmail = $_POST['kin-email'];
        $role = "passenger";

        //encripting password
        $pass = password_hash($password, PASSWORD_DEFAULT);

        //registering user
        $r_sql = $conn->prepare("INSERT INTO users (name, phone, email, password, role, address, kin_name, kin_email, kin_phone, image) VALUES (:name, :phone, :email, :password, :role, :address, :kin_name, :kin_email, :kin_phone, :image)");
        $r_sql->bindParam(":name", $name);
        $r_sql->bindParam(":phone", $phone);
        $r_sql->bindParam(":email", $email);
        $r_sql->bindParam(":password", $pass);
        $r_sql->bindParam(":role", $role);
        $r_sql->bindParam(":address", $address);
        $r_sql->bindParam(":kin_name", $kinName);
        $r_sql->bindParam(":kin_email", $kinEmail);
        $r_sql->bindParam(":kin_phone", $kinPhone);
        $r_sql->bindParam(":image", $profilePic);
        $reg_exe = $r_sql->execute();

        if (!$reg_exe) {
            throw new LogicException("Unable to register your account");
        }

        $_SESSION['email'] = "";
        $_SESSION['password'] = "";
        $_SESSION['registered'] = true;
        $_SESSION['msg'] = "Account created successfully";

        //redirecting user to login page
        header("location: login.php");
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
    }
}
