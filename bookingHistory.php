<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
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
                <a href="#">Booking History</a>
                <a href="routes.php">Routes</a>
                <a href="myAccount.php">
                    <img src="./img/profilePic.png" alt="profile picture" class="rounded-circle">
                    <span>My Account</span>
                </a>
            </form>
        </nav>
    </header>

    <div class="container">

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
                    <div style="padding-left: 50px;"><br><br>
                        <div class="perPassengerText">Amount paid</div>
                        <br>
                        <span class="cH2">GHS65</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>


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


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
        <script src="bootstrap/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>