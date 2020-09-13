<?php
include __DIR__ . "/../config.php";
session_start();

$msg = null;

if (!isset($_POST['submit_update'])) {
    $sql = $conn->prepare("SELECT * FROM bus");
    $exe = $sql->execute();

    if (!$exe) {
        throw new LogicException("Error loading bus...");
    }

    $buses = $sql->fetchAll();
}


if (isset($_POST['submit-bus'])) {
    $_SESSION['msg_update'] = null;
    $fileTmp = $_FILES['bus-pic']["tmp_name"];
    $fileName = $_FILES['bus-pic']["name"];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $fileActualName = time() . "." . $fileActualExt;
    move_uploaded_file($fileTmp, "../uploads/" . $fileActualName);

    try {
        $busPic = $fileActualName;
        $model = $_POST['model'];
        $plate = $_POST['plate'];
        $color = $_POST['color'];
        $totalSeat = $_POST['total-seat'];

        //add bus to databasae
        $r_sql = $conn->prepare("INSERT INTO bus (total_seat, model, number_plate, color, image) VALUES (:total_seat, :model, :number_plate, :color, :image)");
        $r_sql->bindParam(":total_seat", $totalSeat);
        $r_sql->bindParam(":model", $model);
        $r_sql->bindParam(":number_plate", $plate);
        $r_sql->bindParam(":color", $color);
        $r_sql->bindParam(":image", $busPic);
        $reg_exe = $r_sql->execute();

        if (!$reg_exe) {
            throw new LogicException("Unable to register bus");
        }

        $_SESSION['msg_update'] = "Bus added successfully";

        //redirecting
        header("location: ../admin.php");
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
    }
}
