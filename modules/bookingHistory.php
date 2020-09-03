<?php
session_start();
include __DIR__ . "/../base_url.php";
include __DIR__ . "/../controller/RouteController.php";
include __DIR__ . "/../controller/AuthController.php";
checkUserIsLoggedIn();
$pageName = "booking history";
$_SESSION['active'] = 'booking';

getHead(false, $pageName);

getNavbar(false);
?>
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
                                    <img src="./img/timimgs.png" alt="">
                                    <br>
                                    <span class="cH3">
                                        Timings <br> 9: 00 PM 5:45AM
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm boxLeft boxRight">
                                <div class="boxText">
                                    <img src="./img/estimatedTime.png" alt="">
                                    <br>
                                    <span class="cH3">
                                        Estimated Time <br> 5:45 Hrs
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="boxText">
                                    <img src="./img/seats.png" alt="">
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
                    </div>
                </div>
            </div>
        </div>
    
    </div>
<?php
getFooter(false);
?>