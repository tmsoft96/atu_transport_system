<?php
include __DIR__ . "/../base_url.php";
include __DIR__ . "/../controller/RouteController.php";
include __DIR__ . "/../controller/AuthController.php";
include __DIR__ . "/../main/bookingHistoryDetails.php";
checkUserIsLoggedIn();
$pageName = "booking history";
$_SESSION['active'] = 'booking';
$_SESSION['msg_update'] = null;

getHead(false, $pageName);

getNavbar(false);
?>
<div class="container">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm">
                <span class="cH1">Booking History</span>
            </div>
            <div class="col-sm">
                <div style="padding: 10px 10px 0px 40px;">
                    <button type="button" class="btn btn-success">Print Booking</button>
                    <button type="button" class="btn btn-success">Cancel Booking</button>
                    <button type="button" class="btn btn-success">Edit Booking</button></div>
            </div>
        </div>
        <br><br>

        <?php
        foreach ($schedules as &$schedule) {
            $routeId = $schedule['route_id'];
            $sql2 = $conn->prepare("SELECT * FROM route WHERE id = :id");
            $sql2->bindParam(":id", $routeId);
            $exe1 = $sql2->execute();

            if (!$exe1) {
                throw new LogicException("Error loading data...");
            }

            $tripDetail = $sql2->fetch(PDO::FETCH_OBJ);
            $destination = $tripDetail->final_destinantion;
            $departureTime = $tripDetail->departure_time;
            $departureDate = $tripDetail->departure_date;
            $arrivalTime = $tripDetail->arrival_time;
            $busId = $tripDetail->bus_id;
            $location = $tripDetail->current_location;

            $sql3 = $conn->prepare("SELECT * FROM bus WHERE id = :id");
            $sql3->bindParam(":id", $busId);
            $exe2 = $sql3->execute();

            if (!$exe2) {
                throw new LogicException("Error loading data...");
            }

            $busDetail = $sql3->fetch(PDO::FETCH_OBJ);
            $totalSeatv = $busDetail->total_seat;
            $busImagev = $busDetail->image;
            echo '<div class="box">
            <div class="row">
            <div class="col boxBusPic">
                <img src="' .
                APP_URL . "/uploads/" . $busImagev
                . '" alt="Bus">
            </div>
            <div class="col-6 boxLeft boxRight">
                <div class="boxBottom">
                    <div class="boxText h4">' .
                strtoupper($location) . " - " . strtoupper($destination) . " (" .  $departureDate . ")"
                . '</div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="boxText">
                                <img src="public/img/timimgs.png" alt="">
                                <br>
                                <span class="cH3">
                                    Timings <br> ' .
                $departureTime . " - " . $arrivalTime
                . '
                                </span>
                            </div>
                        </div>
                        <div class="col-sm boxLeft">
                            <div class="boxText">
                                <br>
                                <span class="cH3">
                                    Selected Seat <br>' .
                $schedule['seat_no']
                . ' </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div style="padding-left: 50px;"><br><br>
                    <div class="perPassengerText">Amount paid</div>
                    
                    <span class="cH2">GHS' .
                $schedule['p_amount']
                . '</span>
                 </div>
            </div>
        </div>
        </div>';
        }
        ?>
    </div>
</div>
<?php
getFooter(false);
?>