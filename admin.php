<?php
include __DIR__ . "/base_url.php";
include __DIR__ . "/controller/RouteController.php";
include __DIR__ . "/controller/AuthController.php";
include __DIR__ . "/main/adminDetials.php";

checkUserIsLoggedIn();
$_SESSION['active'] = null;
$pageName = "Admin Homepage";
getHead(true, $pageName);
getNavbar(true);
?>
<div class="clearfix" style="background-color: #EEEEEE;">
    <div class="float-left">
        <div class="accountLeftContainer">
            <div class="accountLeftPic">
                <div class="row">
                    <div class="col">
                        <img src="<?php
                                    if (isset($_SESSION['profilePic'])) {
                                        echo  APP_URL . "/uploads/" . $_SESSION['profilePic'];
                                    } else {
                                        echo  APP_URL . "/public/img/profilePic.jpg";
                                    }
                                    ?>" alt="profile pic" height="70px" width="70px" class="rounded-circle">
                    </div>
                    <div class="col">
                        <span class="cH2"><?= ucwords($_SESSION['name'])  ?></span>
                    </div>
                </div>
            </div>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('schedulesId', 'Schedules')">
                    <img src="public/img/schedules.png" alt="Schedules">
                    <span class="cH3">Schedules</span>
                </a>
            </div>
            <br><br>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('addTripId', 'Add Trip')">
                    <img src="public/img/addTrip.png" alt="Add Trip">
                    <span class="cH3">Add Trip</span>
                </a>
            </div>
            <br><br>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('addBusId', 'Add Bus')">
                    <img src="public/img/addBus.png" alt="Add Bus">
                    <span class="cH3">Add Bus</span>
                </a>
            </div>
        </div>
    </div>
    <div class="accountRightContainer">
        <span class="cH1" id="title">Schedules</span>
        <br> <br>
        <?php
        if (isset($msg)) {
            echo '<div class="alert alert-danger h5">
                        <p>' . $msg . '</p>
                        </div>';
        }
        if (isset($_SESSION['msg_update'])) {
            echo '<div class="alert alert-info h5">
                        <p>' . $_SESSION['msg_update'] . '</p>
                        </div>';
        }
        ?>

        <form method="POST">
            <div class="addTrip formSize tabContent" id="addTripId">
                <div class="row">
                    <div class="col">
                        <span class="cH3">Select operation day</span>
                        <select class="form-control" name="day">
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </div>
                    <div class="col"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>Current Location</label>
                        <input type="text" class="form-control" placeholder="Location" name="location">
                    </div>
                    <div class="col">
                        <label>Destination</label>
                        <input type="text" class="form-control" placeholder="Destination" name="destination">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label>Bus stops (use comma "," to separate text)</label>
                    <input type="text" class="form-control" placeholder="Bus stops" name="bus-stops">
                </div>
                <br>
                <label>Departure time and date</label>
                <div class="row">
                    <div class="col">
                        <label>Time</label>
                        <input type="time" class="form-control" placeholder="time" name="departure-time">
                    </div>
                    <div class="col">
                        <label>Date</label>
                        <input type="date" class="form-control" placeholder="date" name="departure-date">
                    </div>
                </div>
                <br>
                <label>Arrival time</label>
                <div class="row">
                    <div class="col">
                        <label>Time</label>
                        <input type="time" class="form-control" placeholder="time" name="arrival-time">
                    </div>
                    <div class="col">
                        <label>Time</label>
                        <input type="date" class="form-control" placeholder="time" name="arrival-date">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>Amount(GHS)</label>
                        <input type="number" class="form-control" placeholder="Amount(GHS)" name="amount">
                    </div>
                    <div class="col">
                        <label>Discount(%) (Only visible for round trips)</label>
                        <input type="number" class="form-control" placeholder="Discount(%)" name="discount">
                    </div>
                </div>
                <br><br>
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="openTapMyAccount('selectBusId', 'Select Bus')">Select Bus</button>
            </div>
            <div class="selectBus tabContent" id="selectBusId">
                <input type="hidden" name="bus-id" id="busId">
                <?php
                foreach ($buses as &$bus) {
                    echo
                        '<div class="box">
                    <div class="row">
                        <div class="col boxBusPic">
                            <img src="' .
                            APP_URL . "/uploads/" . $bus["image"]
                            . '" alt="Bus">
                        </div>
                        <div class="col-6 boxLeft boxRight">
                            <div class="boxBottom">
                                <div class="boxText">
                                    <span class="cH2">' .
                            $bus["model"]
                            . '</span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="boxText">
                                            <img src="public/img/timimgs.png" alt="">
                                            <br>
                                            <span class="cH3">
                                                Number Plate <br> ' .
                            $bus["number_plate"]
                            . '</span>
                                        </div>
                                    </div>
                                   
                                    <div class="col-sm boxLeft">
                                        <div class="boxText">
                                            <span class="cH3">
                                                <br>
                                                Color <br> 
                                                <div class="card" style="height: 40px; background-color: ' . $bus["color"] . ';"></div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="padding-left: 50px;">
                                <br>
                                <div class="perPassengerText">Total Seats</div>
                                <br>
                                <span class="cH2">' . $bus["total_seat"] . '</span>
                                <br>
                                <button type="button" class="btn btn-success" onclick="selectBusId(\'' . $bus["id"] . '\',\'' . $bus["model"] . '\',\'' . $bus["number_plate"] . '\')">Select Bus</button><br>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>';
                }
                unset($bus);
                ?>
                <div class="d-flex justify-content-center">
                    <span class="h5"><span id="busSelectDisplay">Select bus</span> </span>
                </div>

                <br><br>
                <button type="submit" name="submit-trip" class="btn btn-success btn-lg btn-block">Add Trip</button>
            </div>
        </form>


        <div class="addBus formSize tabContent" id="addBusId">
            <form class="mt-3" method="POST" enctype="multipart/form-data" action="main/adminDetials.php">
                <div style="text-align: center;">
                    <img src="public/img/bus.png" alt="Bus" height="150px" width="220px" id="profilePic">
                    <br>
                    <div class="fileChoosenContainer mx-auto" style="width: 250px;">
                        <div class="form-inline">
                            <div class="form-group mb-2">
                                <input type="file" class="form-control-file" id="profilePictureInput" accept="image/*" onchange="uploadProfilePicture()" name="bus-pic">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>Model</label>
                        <input type="text" class="form-control" placeholder="model" name="model">
                    </div>
                    <div class="col">
                        <label>Number plate</label>
                        <input type="text" class="form-control" placeholder="Number plate" name="plate">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>Color</label>
                        <input type="color" class="form-control" placeholder="color" name="color">
                    </div>
                    <div class="col">
                        <label>Total Seat</label>
                        <input type="number" class="form-control" placeholder="total seat" name="total-seat">
                    </div>
                </div>
                <br><br>
                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit-bus">Add Bus</button>
            </form>
        </div>

        <div class="schedules tabContent" id="schedulesId">
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
                $fee = $tripDetail->fee;
                $destination = $tripDetail->final_destinantion;
                $departureTime = $tripDetail->departure_time;
                $departureDate = $tripDetail->departure_date;
                $arrivalTime = $tripDetail->arrival_time;
                $arrivalDate = $tripDetail->arrival_date;
                $busId = $tripDetail->bus_id;
                $location = $tripDetail->current_location;
                $discount = $tripDetail->discount;

                $sql3 = $conn->prepare("SELECT * FROM bus WHERE id = :id");
                $sql3->bindParam(":id", $busId);
                $exe2 = $sql3->execute();

                if (!$exe2) {
                    throw new LogicException("Error loading data...");
                }

                $busDetail = $sql3->fetch(PDO::FETCH_OBJ);
                $totalSeatv = $busDetail->total_seat;
                $busImagev = $busDetail->image;
                $modelv = $busDetail->model;

                $email = $_SESSION['email'];
                $sql4 = $conn->prepare("SELECT * FROM users WHERE email = :email");
                $sql4->bindParam(":email", $email);
                $exe3 = $sql4->execute();

                if (!$exe3) {
                    throw new LogicException("Error loading data...");
                }

                $user = $sql4->fetch(PDO::FETCH_OBJ);

                $userId = $user->id;
                $profileImage = $user->image;
                $name = $user->name;
                $phone = $user->phone;
                $email = $user->email;
                $address = $user->address;
                $kinName = $user->kin_name;
                $kinEmail = $user->kin_email;
                $kinPhone = $user->kin_phone;

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
                                            Seats <br>' .
                    $totalSeatv
                    . ' Available
                                        </span>

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
                            <br><br>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookSummaryModal' . $routeId . '">View Details</button><br>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade" id="bookSummaryModal' . $routeId . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Booking Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <div style="text-align: center;">
                                        <img src="' .
                    APP_URL . "/uploads/" . $profileImage
                    . '" alt="Bus" height="150px" width="150px" class="rounded-circle">
                                        </div>
                                        <br><br>
                                        <span class="cH3">Name: ' .
                    $name
                    . '</span>
                                        <br>
                                        <span class="cH3">Phone Number: ' .
                    $phone
                    . '</span>
                                        <br>
                                        <span class="cH3">Email: ' .
                    $email
                    . '</span>
                                        <br>
                                        <span class="cH3">Address: ' .
                    $address
                    . '</span>
                                        <br><br>
                                        <span class="cH2">Kin Details</span>
                                        <br>
                                        <span class="cH3">Name: ' .
                    $kinName
                    . '</span>
                                        <br>
                                        <span class="cH3">Phone Number: ' .
                    $kinPhone
                    . '</span>
                                        <br>
                                        <span class="cH3">Email: ' .
                    $kinEmail
                    . '</span>
                                        <br>
                                    </div>
                                    <div class="col-sm">
                                        <span class="cH2">' .
                    strtoupper($location) . " - " . strtoupper($destination) . " (" .  $departureDate . ")"
                    . '</span>
                                        <br>
                                        <span class="cH3">Trip type: ' .
                    $schedule['trip_type']
                    . ' </span>
                                        <br>
                                        <span class="cH3">Seat No: ' .
                    $schedule['seat_no']
                    . '</span>
                                        <br>
                                        <span class="cH3">Bus fare: GHS' .
                    $fee
                    . '</span>
                                        <br>
                                        <span class="cH3">Discount: ' .
                    $discount
                    . '%</span>
                                        <br>
                                        <span class="cH2">Total fare: GHS' .
                    $schedule['p_amount']
                    . '</span>
                                        <br><br>
                                        <span class="cH2">Payment Option</span>
                                        <br>
                                        <span class="cH3">Amount Paid: ' .
                    $schedule['p_amount']
                    . '</span>
                                        <br>
                                        <span class="cH3">Transaction Id: ' .
                    $schedule['p_trans_id']
                    . '</span>
                                        <br>
                                        <span class="cH3">Platform: ' .
                    $schedule['p_platform']
                    . '</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary cButton" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>




</div>
<?php
getFooter(true);
?>
<script src="<?= APP_URL ?>/function/script.js"></script>
<script>
    $(function() {
        openTapMyAccount('schedulesId', 'Schedules');
    });
</script>