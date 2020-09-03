<?php
session_start();
include __DIR__ . "/../base_url.php";
include __DIR__ . "/../controller/RouteController.php";
// include "config/conn.php";
// include __DIR__ . "/login/sessions.php";

getHead(false, $pageName);

getNavbar(false);
?>

<div class="clearfix" style="background-color: #EEEEEE;">
    <div class="float-left">
        <div class="accountLeftContainer">
            <div class="accountLeftPic">
                <img src="<?= APP_URL?>/public/img/profilePic.png" alt="profile pic">
                <span class="cH2">Name</span>
            </div>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('schedulesId', 'Schedules')">
                    <img src="<?= APP_URL?>/public/img/schedules.png" alt="Schedules">
                    <span class="cH3">Schedules</span>
                </a>
            </div>
            <br><br>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('addTripId', 'Add Trip')">
                    <img src="<?= APP_URL?>/public/img/addTrip.png" alt="Add Trip">
                    <span class="cH3">Add Trip</span>
                </a>
            </div>
            <br><br>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('addBusId', 'Add Bus')">
                    <img src="<?= APP_URL?>/public/img/addBus.png" alt="Add Bus">
                    <span class="cH3">Add Bus</span>
                </a>
            </div>
        </div>
    </div>
    <div class="accountRightContainer">
        <span class="cH1" id="title">Schedules</span>
        <br> <br>
        <div class="schedules tabContent" id="schedulesId">
            <div class="box">
                <div class="row">
                    <div class="col boxBusPic">
                        <img src="<?= APP_URL?>/public/img/bus.png" alt="Bus">
                    </div>
                    <div class="col-6 boxLeft boxRight">
                        <div class="boxBottom">
                            <div class="boxText">
                                <span class="cH2">ACCRA(CIRCLE) - BEREKUM</span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="boxText">
                                        <img src="<?= APP_URL?>/public/img/timimgs.png" alt="">
                                        <br>
                                        <span class="cH3">
                                            Timings <br> 9: 00 PM 5:45AM
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm boxLeft boxRight">
                                    <div class="boxText">
                                        <img src="<?= APP_URL?>/public/img/estimatedTime.png" alt="">
                                        <br>
                                        <span class="cH3">
                                            Estimated Time <br> 5:45 Hrs
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="boxText">
                                        <img src="<?= APP_URL?>/public/img/seat.png" alt="">
                                        <br>
                                        <span class="cH3">
                                            Seats <br> 44 Available
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="padding-left: 50px;"><br><br>
                            <div class="perPassengerText">Amount paid</div>
                            <br>
                            <span class="cH2">GHS65</span>
                            <br>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookSummaryModal">View Details</button><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="row">
                    <div class="col boxBusPic">
                        <img src="<?= APP_URL?>/public/img/bus.png" alt="Bus">
                    </div>
                    <div class="col-6 boxLeft boxRight">
                        <div class="boxBottom">
                            <div class="boxText">
                                <span class="cH2">ACCRA(CIRCLE) - BEREKUM</span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="boxText">
                                        <img src="<?= APP_URL?>/public/img/timimgs.png" alt="">
                                        <br>
                                        <span class="cH3">
                                            Timings <br> 9: 00 PM 5:45AM
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm boxLeft boxRight">
                                    <div class="boxText">
                                        <img src="<?= APP_URL?>/public/img/estimatedTime.png" alt="">
                                        <br>
                                        <span class="cH3">
                                            Estimated Time <br> 5:45 Hrs
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="boxText">
                                        <img src="<?= APP_URL?>/public/img/seat.png" alt="">
                                        <br>
                                        <span class="cH3">
                                            Seats <br> 44 Available
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="padding-left: 50px;"><br><br>
                            <div class="perPassengerText">Amount paid</div>
                            <br>
                            <span class="cH2">GHS65</span>
                            <br>
                            <button type="button" class="btn btn-success">View Details</button><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="">
            <div class="addTrip formSize tabContent" id="addTripId">
                <div class="row">
                    <div class="col">
                        <span class="cH3">Select operation day</span>
                        <select class="form-control">
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
                        <label for="exampleInputEmail1">Current Location</label>
                        <input type="text" class="form-control" placeholder="Location">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Destination</label>
                        <input type="text" class="form-control" placeholder="Destination">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bus stops (use comma "," to separate text)</label>
                    <input type="text" class="form-control" placeholder="Bus stops">
                </div>
                <br>
                <label for="exampleInputEmail1">Destination time and date</label>
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1">Time</label>
                        <input type="time" class="form-control" placeholder="time">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" placeholder="date">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <br>
                <label for="exampleInputEmail1">Arrival time</label>
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1">Time</label>
                        <input type="time" class="form-control" placeholder="time">
                    </div>
                    <div class="col"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1">Amount(GHS)</label>
                        <input type="number" class="form-control" placeholder="Amount(GHS)">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Discount(%) (Only visible for round trips)</label>
                        <input type="number" class="form-control" placeholder="Discount(%)">
                    </div>
                </div>
                <br><br>
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="openTapMyAccount('selectBusId', 'Select Bus')">Select Bus</button>
            </div>
            <div class="selectBus tabContent" id="selectBusId">
                <div class="box">
                    <div class="row">
                        <div class="col boxBusPic">
                            <img src="<?= APP_URL?>/public/img/bus.png" alt="Bus">
                        </div>
                        <div class="col-6 boxLeft boxRight">
                            <div class="boxBottom">
                                <div class="boxText">
                                    <span class="cH2">Bus Name</span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="boxText">
                                            <img src="<?= APP_URL?>/public/img/timimgs.png" alt="">
                                            <br>
                                            <span class="cH3">
                                                Model <br> model
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm boxLeft boxRight">
                                        <div class="boxText">
                                            <img src="<?= APP_URL?>/public/img/estimatedTime.png" alt="">
                                            <br>
                                            <span class="cH3">
                                                No. Plate <br> 00334
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="boxText">
                                            <img src="<?= APP_URL?>/public/img/seat.png" alt="">
                                            <br>
                                            <span class="cH3">
                                                Color <br> Red
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
                                <span class="cH2">30</span>
                                <br>
                                <button type="button" class="btn btn-success">Select Bus</button><br>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <button type="button" class="btn btn-success btn-lg btn-block">Add Trip</button>
            </div>
        </form>
        <div class="addBus formSize tabContent" id="addBusId">
            <form>
                <div style="text-align: center;">
                    <img src="<?= APP_URL?>/public/img/bus.png" alt="profile pic" height="150px" width="220px">
                    <br>
                    <div class="fileChoosenContainer mx-auto" style="width: 250px;">
                        <div class="form-inline">
                            <div class="form-group mb-2">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1">Model</label>
                        <input type="text" class="form-control" placeholder="model">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Number plate</label>
                        <input type="text" class="form-control" placeholder="Number plate">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1">Color</label>
                        <input type="color" class="form-control" placeholder="color">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Total Seat</label>
                        <input type="number" class="form-control" placeholder="total seat">
                    </div>
                </div>
                <br><br>
                <button type="button" class="btn btn-success btn-lg btn-block">Add Bus</button>
            </form>
        </div>

    </div>
</div>


<div class="modal fade" id="bookSummaryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="<?= APP_URL?>/public/img/bus.png" alt="Bus" height="200px" width="300px">
                        </div>
                        <br><br>
                        <span class="cH3">Name:</span>
                        <br>
                        <span class="cH3">Phone Number:</span>
                        <br>
                        <span class="cH3">Email:</span>
                        <br>
                        <span class="cH3">Address:</span>
                        <br><br>
                        <span class="cH2">Kin Details</span>
                        <br>
                        <span class="cH3">Name:</span>
                        <br>
                        <span class="cH3">Phone Number:</span>
                        <br>
                        <span class="cH3">Email:</span>
                        <br>
                    </div>
                    <div class="col-sm">
                        <span class="cH2">ACCRA(CIRCLE) - BEREKUM (29/02/2020)</span>
                        <br>
                        <span class="cH3">Trip type: One Way </span>
                        <br>
                        <span class="cH3">Seat No: 7</span>
                        <br>
                        <span class="cH3">Bus fare: GHS55.00</span>
                        <br>
                        <span class="cH3">Discount: 10%</span>
                        <br>
                        <span class="cH2">Total fare: GHS30.00</span>
                        <br><br>
                        <span class="cH2">Payment Option</span>
                        <br>
                        <span class="cH3">Amount Paid:</span>
                        <br>
                        <span class="cH3">Transaction Id:</span>
                        <br>
                        <span class="cH3">Platform:</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cButton" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // openTapMyAccount('schedulesId', 'Schedules');
    });
</script>
<?php
getFooter(false);
?>