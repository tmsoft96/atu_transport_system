<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Hompage</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light" style="background-color: #0086FC;">
            <div id="logo">
                <img src="./img/logo.png" alt="logo">
            </div>
            <form class="form-inline">
                <a href="index.php">Home</a>
                <a href="bookingHistory.php">Booking History</a>
                <a href="routes.php">Routes</a>
                <a href="myAccount.php">
                    <img src="./img/profilePic.png" alt="profile picture" class="rounded-circle">
                    <span>My Account</span>
                </a>
            </form>
        </nav>
    </header>

    <div class="container">
        <div class="subTitle">
            Travel Ticket
        </div>
        <div class="subTitle2">
            ACCRA(CIRCLE) - BEREKUM (29 / 9/ 2020)
        </div>
        <div class="box">
            <div class="row">
                <div class="col boxBusPic">
                    <img src="./img/bus.png" alt="Bus">
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
                    <span class="cH2">GHS65</span>
                    <br>
                    <div class="perPassengerText">per passenger</div>
                    <br>
                    <div class="btn-group homeTextBox">
                        <button type="button" class="btn btn-success btn-lg cButton">View Seat</button>
                    </div>
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
                                    Select trip type
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg-right">
                                    <button class="dropdown-item" type="button">One Way</button>
                                    <button class="dropdown-item" type="button">Round Trip</button>
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
                                    Select bus stop
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg-right">
                                    <button class="dropdown-item" type="button">One Way</button>
                                    <button class="dropdown-item" type="button">Round Trip</button>
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
                                <button type="button" class="btn btn-danger"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                            <td> <button type="button" class="btn btn-secondary"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-danger"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                            <td><button type="button" class="btn btn-success"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="emptySpace"></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="button" class="btn btn-secondary"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                            <td> <button type="button" class="btn btn-secondary"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./img/stir.png" alt="driver seat" width="30px" height="30px" style="margin-right: 20px;"></td>
                            <td><button type="button" class="btn btn-secondary"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                            <td><button type="button" class="btn btn-secondary"><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm">
                <div class="box" style="padding: 20px;">
                    <div class="row">
                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary" disabled><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            <span class="cH3">Available</span>
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn btn-danger" disabled><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            <span class="cH3">Booked</span>
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn btn-success" disabled><img src="./img/seat.png" alt="seat" width="30px" height="30px"></button>
                            <span class="cH3">Selected</span>
                        </div>
                    </div>
                    <br>
                    <div class="boxBottom"></div>
                    <span class="cH3">Seat No: - 7</span>
                    <br>
                    <span class="cH3">Bus Fare: GHS65 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Discount: 10%</span>
                    <div class="boxBottom"></div>
                    <span class="cH2">Total Fare: GHS55</span>
                </div>
            </div>
        </div>

        <br><br>
        <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#bookSummaryModal">Book Seat Now</button>
    </div>




    <br><br><br>



    <div class="footer">
        <nav class="navbar navbar-light" style="background-color: #EEEEEE;">
            <a class="navbar-brand"></a>
            <form class="form-inline">
                <table>
                    <tr>
                        <td><span class="cH3">
                                Our payment options
                            </span></td>
                    </tr>
                    <tr>
                        <td id="homeTableImage">
                            <img src="./img/mtn.png" alt="mtn">
                            <img src="./img/tigo.png" alt="tigo">
                            <img src="./img/vodafone-logo-1.png" alt="vodafone">
                            <img src="./img/Former_Visa_(company)_logo.svg.png" alt="visa">
                        </td>
                    </tr>
                </table>
            </form>
        </nav>
        <div id="copyright">
            Copyright © 2020 Group 6. All rights reserved.
            </span>
        </div>
    </div>

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
                                <img src="./img/bus.png" alt="Bus" height="200px" width="300px">
                            </div>
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
                                        Select Payment option
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" type="button">MTN Mobile Money</button>
                                        <button class="dropdown-item" type="button">AirtelTigo Money</button>
                                        <button class="dropdown-item" type="button">Vodafone Cash</button>
                                        <button class="dropdown-item" type="button">Visa Card</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm ">
                                <div class="form-group">
                                    <label for="phoneNumber" class="cH2">Enter phone number</label>
                                    <input type="text" class="form-control" id="phoneNumber" placeholder="phone number">
                                </div>
                                <div class="form-group">
                                    <label for="transactionID" class="cH2">Enter transaction id</label>
                                    <input type="text" class="form-control" id="transactionID" placeholder="transaction id">
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



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="./bootstrap/jquery-3.4.1.slim.min.js"></script>
            <script src="./bootstrap/popper.min.js"></script>
            <script src="./bootstrap/bootstrap.min.js"></script>
</body>

</html>