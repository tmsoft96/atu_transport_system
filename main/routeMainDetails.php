<?php
include __DIR__ . "/../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["trip_id"])) {
    $tripId = $_GET["trip_id"];
    $_SESSION["tripId"] = $tripId;

    $sql = $conn->prepare("SELECT * FROM route WHERE id = :id");
    $sql->bindParam(":id", $tripId);
    $exe = $sql->execute();

    if (!$exe) {
        throw new LogicException("Error loading data...");
    }

    $tripDetail = $sql->fetch(PDO::FETCH_OBJ);

    $destination = $tripDetail->final_destinantion;
    $busStop = $tripDetail->bus_stops;
    $fee = $tripDetail->fee;
    $departureTime = $tripDetail->departure_time;
    $departureDate = $tripDetail->departure_date;
    $arrivalTime = $tripDetail->arrival_time;
    $arrivalDate = $tripDetail->arrival_date;
    $discount = $tripDetail->discount;
    $busId = $tripDetail->bus_id;
    $location = $tripDetail->current_location;

    $splitBusStop = explode(',', $busStop);

    $sql = $conn->prepare("SELECT * FROM bus WHERE id = :id");
    $sql->bindParam(":id", $busId);
    $exe = $sql->execute();

    if (!$exe) {
        throw new LogicException("Error loading data...");
    }

    $busDetail = $sql->fetch(PDO::FETCH_OBJ);
    $totalSeat = $busDetail->total_seat;
    $busImage = $busDetail->image;
    $model = $busDetail->model;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["book-submit"])) {
    $_SESSION['msg_update'] = null;
    $userId = $_SESSION["userId"];
    $routeId = $_SESSION["tripId"];
    $seatNo = $_POST["selected-seat"];
    $tripType = $_POST["details-trip-type"];
    $tripBusStop = $_POST["details-bus-stop"];
    $pAmount = $_POST["total-fare"];
    $pPhone = $_POST["payment-phone"];
    $pPlatform = $_POST["payment"];
    $pTransId = $_POST["payment-transaction"];
    try {
        $r_sql = $conn->prepare("INSERT INTO schedules (user_id, route_id, trip_type, trip_bus_stop, p_amount, p_phone_number, p_platform, p_trans_id, seat_no) 
    VALUES (:user_id, :route_id, :trip_type, :trip_bus_stop, :p_amount, :p_phone_number, :p_platform, :p_trans_id, :seat_no)");
        $r_sql->bindParam(":user_id", $userId);
        $r_sql->bindParam(":route_id", $routeId);
        $r_sql->bindParam(":trip_type", $tripType);
        $r_sql->bindParam(":trip_bus_stop", $tripBusStop);
        $r_sql->bindParam(":p_amount", $pAmount);
        $r_sql->bindParam(":p_phone_number", $pPhone);
        $r_sql->bindParam(":p_platform", $pPlatform);
        $r_sql->bindParam(":p_trans_id", $pTransId);
        $r_sql->bindParam(":seat_no", $seatNo);
        $reg_exe = $r_sql->execute();

        if (!$reg_exe) {
            throw new LogicException("Unable to book");
        }

        $_SESSION['msg_update'] = "Your booking was successfully. You can also visit the booking history to view all your bookings";

        //redirecting
        header("location: index.php");
    } catch (LogicException $th) {
        $msg = $th->getMessage();
    } catch (Exception $t) {
        $msg = $t->getMessage();
    }
}
