<?php
include __DIR__ . "/base_url.php";
include __DIR__ . "/controller/RouteController.php";
// include __DIR__ . "/controller/AuthController.php";
// checkUserIsLoggedIn();
include __DIR__ . "/main/routeMainDetails.php";

$pageName = "Trip Details";
$_SESSION['active'] = null;
$_SESSION['msg_update'] = null;

getHead(true, $pageName);
getNavbar(true);
?>
<div class="container">
    <div class="subTitle">
        Travel Ticket
    </div>
    <div class="subTitle2 h4">
        <?= strtoupper($location) . " - " . strtoupper($destination) . " (" .  $departureDate . ")" ?>
    </div>
    <div class="box">
        <div class="row">
            <div class="col boxBusPic">
                <img src="<?php
                            if (isset($busImage)) {
                                echo  APP_URL . "/uploads/" . $busImage;
                            } else {
                                echo  APP_URL . "/public/img/bus.png";
                            }
                            ?>" alt="Bus">
                <br>
                <div class="boxText">
                    <span class="h5"><?= $model ?></span>
                </div>
            </div>
            <div class="col-6 boxLeft boxRight">
                <div class="boxBottom">
                    <div class="boxText">
                        <span class="cH2"><?= strtoupper($location) . " - " . strtoupper($destination) ?></span>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="boxText">
                                <img src="<?= APP_URL . '/public/img/timimgs.png' ?>" alt="">
                                <br>
                                <span class="cH3">
                                    Timings <br> <?= $departureTime . "<br>" . $arrivalTime ?>
                                </span>
                            </div>
                        </div>
                        <!-- <div class="col-sm boxLeft boxRight">
                            <div class="boxText">
                                <br>
                                <span class="cH3">
                                    Estimated Time <br> 5:45 Hrs
                                </span>
                            </div>
                        </div> -->
                        <div class="col-sm boxLeft">
                            <div class="boxText">
                                <br>
                                <span class="cH3">
                                    Seats <br> <?= $totalSeat ?> Available
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <br><br>
                <span class="h3">GHS<?= $fee ?></span>
                <br>
                <div class="perPassengerText">per passenger</div>
                <br>
                <!-- <div class="btn-group homeTextBox">
                    <button type="button" class="btn btn-success btn-lg cButton">View Seat</button>
                </div> -->
            </div>
        </div>
    </div>

</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <table>
                <tr>
                    <td class="cH2">Select trip type: &nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                <span id="detailsTripTypeText">Select trip type</span>
                            </button>
                            <input type="hidden" id="detailstripType" name="details-trip-type">
                            <div class="dropdown-menu dropdown-menu-lg-right">
                                <button class="dropdown-item" type="button" onclick="selectHomeSearch('detailstripType', 'detailsTripTypeText', 'One Way')">One Way</button>
                                <button class="dropdown-item" type="button" onclick="selectHomeSearch('detailstripType', 'detailsTripTypeText', 'Round Trip')">Round Trip</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm">
            <table>
                <tr>
                    <td class="cH2">Select bus stop: &nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                <span id="detailsBusStopText">Select bus stop</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg-right">
                                <input type="hidden" id="detailsBusStop" name="details-bus-stop">
                                <?php
                                foreach ($splitBusStop as &$busStop) {
                                    echo '<button class="dropdown-item" type="button" onclick="selectHomeSearch(\'detailsBusStop\', \'detailsBusStopText\', \'' . $busStop . '\')">' .
                                        $busStop
                                        . '</button>';
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="box" style="padding: 10px;">
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-secondary" onclick="selectSeat(1)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td> <button type="button" class="btn btn-secondary" onclick="selectSeat(2)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(3)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(4)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(5)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(6)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(7)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(8)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-secondary" onclick="selectSeat(9)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(10)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(11)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(12)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(13)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(14)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(15)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(16)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="emptySpace"></div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(17)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(18)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td> <button type="button" class="btn btn-secondary" onclick="selectSeat(19)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(20)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(21)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(22)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(23)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(24)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(25)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="<?= APP_URL . '/public/img/stir.png' ?>" alt="driver seat" width="30px" height="30px" style="margin-right: 20px;"></td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(26)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(27)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(28)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(29)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(30)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(31)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(32)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>
                        <td><button type="button" class="btn btn-secondary" onclick="selectSeat(33)"><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        </td>

                    </tr>
                </table>
            </div>
        </div>
        <div class="col-sm">
            <div class="box" style="padding: 20px;">
                <div class="row">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" disabled><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        <span class="cH3">Available</span>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-danger" disabled><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        <span class="cH3">Booked</span>
                    </div>
                    <!-- <div class="col-sm">
                        <button type="button" class="btn btn-success" disabled><img src="<?= APP_URL . '/public/img/seat.png' ?>" alt="seat" width="30px" height="30px"></button>
                        <span class="cH3">Selected</span>
                    </div> -->
                </div>
                <br>
                <div class="boxBottom"></div>
                <input type="hidden" name="selected-seat" id="selectSeatBox" />
                <span class="cH3">Seat No: - <span id="setSeatText">-</span></span>
                <br>
                <input type="hidden" value="<?= $fee ?>" id="routeAmount">
                <input type="hidden" value="<?= $discount ?>" id="routeDiscountInput">
                <input type="hidden" id="routeTotalFare" name="total-fare">
                <span class="cH3">Bus Fare: GHS<?= $fee ?> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="cH3 invisible" id="routeDiscount"> Discount: <?= $discount ?>%</span>
                <div class="boxBottom"></div>
                <span class="cH2">Total Fare: GHS<span id="routeTotalFareDisplay"></span></span>
            </div>
        </div>
    </div>

    <br><br>
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#bookSummaryModal">Book Seat Now</button>
</div>




<br><br><br>
<div class="modal fade" id="bookSummaryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Continue with payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm">
                        <div style="text-align: center;">
                            <img src="<?php
                                        if (isset($busImage)) {
                                            echo  APP_URL . "/uploads/" . $busImage;
                                        } else {
                                            echo  APP_URL . "/public/img/bus.png";
                                        }
                                        ?>" alt="Bus" height="200px" width="300px">
                        </div>
                    </div>
                    <div class="col-sm">
                        <span class="cH2"> <?= strtoupper($location) . " - " . strtoupper($destination) . " (" .  $departureDate . ")" ?></span>
                        <br>
                        <span class="cH3">Trip type: <span id="modelTripType">-</span> </span>
                        <br>
                        <span class="cH3">Seat No: <span id="setSeatText2">-</span> </span>
                        <br>
                        <span class="cH3">Bus fare: GHS<?= $fee ?></span>
                        <br>
                        <span class="cH3 invisible" id="routeDiscount2">Discount: <?= $discount ?>%</span>
                        <br>
                        <span class="cH2">Total fare: GHS<span id="routeTotalFareDisplay2"></span></span>
                    </div>
                </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm boxRight" style="padding-left: 50px;">
                            <span class="cH2">Select Payment option</span>
                            <br><br>
                            <div class="dropdown">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                    <span id="paymentView">Select Payment option</span>
                                </button>
                                <input type="hidden" id="paymentInput" name="payment">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button class="dropdown-item" type="button" onclick="selectHomeSearch('paymentInput', 'paymentView', 'MTN Mobile Money')">MTN Mobile Money</button>
                                    <button class="dropdown-item" type="button" onclick="selectHomeSearch('paymentInput', 'paymentView', 'AirtelTigo Money')">AirtelTigo Money</button>
                                    <button class="dropdown-item" type="button" onclick="selectHomeSearch('paymentInput', 'paymentView', 'Vodafone Money')">Vodafone Cash</button>
                                    <button class="dropdown-item" type="button" onclick="selectHomeSearch('paymentInput', 'paymentView', 'Visa Card')">Visa Card</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm ">
                            <div class="form-group">
                                <label for="phoneNumber" class="cH2">Enter phone number</label>
                                <input type="text" class="form-control" id="phoneNumber" placeholder="phone number" name="payment-phone">
                            </div>
                            <div class="form-group">
                                <label for="transactionID" class="cH2">Enter transaction id</label>
                                <input type="text" class="form-control" id="transactionID" placeholder="transaction id" name="payment-transaction">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cButton" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success cButton">Book</button>
            </div>
        </div>

    </div>
</div>


<?php
getFooter(true);
?>
<script src="<?= APP_URL ?>/function/script.js"></script>