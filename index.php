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
                <a href="#">Home</a>
                <a href="bookingHistory.php">Booking History</a>
                <a href="routes.php">Routes</a>
                <a href="myAccount.php">
                    <img src="./img/profilePic.png" alt="profile picture" class="rounded-circle">
                    <span>My Account</span>
                </a>
            </form>
        </nav>
    </header>

    <span class="cH1 titleCenter">Online Bus Ticketing System</span>
    <br><br>
    <div class="container">
        <form>
            <table>
                <tr>
                    <td>
                        <div class="btn-group homeTextBox">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                <img src="./img/travel to.png" alt=""> TRAVELING FROM
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group homeTextBox">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                <img src="./img/travel from.png" alt=""> TRAVELING TO
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group homeTextBox">
                            <button type="button" class="btn btn-outline-dark" data-display="static" aria-haspopup="true" aria-expanded="false">
                                <img src="./img/travel date.png" alt=""> TRAVELING DATE
                            </button>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group homeTextBox">
                            <button type="button" class="btn btn-success btn-lg cButton" onclick="javascript: window.location.href = 'routeDetails.php'">Search</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="picCenter">
        <img src="./img/VIP-Bus.png" alt="buses">
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <br><br>
                <span class="cH2">
                    Do you want to go on a journey without hustling for ticket? Relax, your bus-stop is just a click
                    away.
                </span>
                <br><br>
                <span class="cH3">
                    Book a bus ticket and enjoy your ride without cramming for space, in a comfortable bus, at a cost
                    that your pocket can happily bear.
                </span>
            </div>
            <div class="col-sm homeIcon">
                <img src="./img/travel.png" alt="travel">
            </div>
        </div>
    </div>

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