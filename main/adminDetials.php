<?php
include __DIR__ . "/../config.php";
session_start();

$msg = null;

if (!isset($_POST['submit-bus']) ) {
    $_SESSION['msg_update'] = null;
    $sql = $conn->prepare("SELECT * FROM bus");
    $exe = $sql->execute();

    if (!$exe) {
        throw new LogicException("Error loading bus...");
    }

    $buses = $sql->fetchAll();

    $sql1 = $conn->prepare(("SELECT * FROM schedules"));
    $exe1 = $sql1->execute();

    if (!$exe1) {
        throw new LogicException("Error loading schedules...");
    }

    $schedules = $sql1->fetchAll();

    if ($schedules == null){
        $_SESSION['msg_update'] = "No schedules yet...";
    }
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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submit-trip"])) {
    $_SESSION['msg_update'] = null;
    $day = $_POST["day"];
    $location = $_POST["location"];
    $destination = $_POST["destination"];
    $busStops = $_POST["bus-stops"];
    $departure_time = $_POST["departure-time"];
    $departure_date = $_POST["departure-date"];
    $arrival_time = $_POST["arrival-time"];
    $arrival_date = $_POST["arrival-date"];
    $amount = $_POST["amount"];
    $discount = $_POST["discount"];
    $busId = $_POST["bus-id"];

    if ($busId == null || $busId == "") {
        $msg = "Bus not selected";
        return;
    }

    try {
        //add trip to database
        $r_sql = $conn->prepare("INSERT INTO route (final_destinantion, bus_stops, fee, departure_time, departure_date, arrival_time, arrival_date, discount, bus_id, current_location, operation_day) 
    VALUES (:destinantion, :busStops, :fee, :departureTime, :departureDate, :arrivalTime, :arrivalDate, :discount, :busId, :location, :day)");
        $r_sql->bindParam(":destinantion", $destination);
        $r_sql->bindParam(":busStops", $busStops);
        $r_sql->bindParam(":fee", $amount);
        $r_sql->bindParam(":departureTime", $departure_time);
        $r_sql->bindParam(":departureDate", $departure_date);
        $r_sql->bindParam(":arrivalTime", $arrival_time);
        $r_sql->bindParam(":arrivalDate", $arrival_date);
        $r_sql->bindParam(":discount", $discount);
        $r_sql->bindParam(":busId", $busId);
        $r_sql->bindParam(":location", $location);
        $r_sql->bindParam(":day", $day);
        $reg_exe = $r_sql->execute();

        if (!$reg_exe) {
            throw new LogicException("Unable to register bus");
        }

        $_SESSION['msg_update'] = "Trip added successfully";

        //redirecting
        header("location: admin.php");
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
    }
}
