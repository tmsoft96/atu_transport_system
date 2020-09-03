<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Routes</title>
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
                <a href="#">Routes</a>
                <a href="myAccount.php">
                    <img src="./img/profilePic.png" alt="profile picture" class="rounded-circle">
                    <span>My Account</span>
                </a>
            </form>
        </nav>
    </header>

    <div class="container">
        <span class="cH1">Routes</span>
        <br><br>
        <div class="box" style="padding: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="cH2">Select your location</span>
                        <br><br>
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                -Choose Location-
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item" type="button">MTN Mobile Money</button>
                                <button class="dropdown-item" type="button">AirtelTigo Money</button>
                                <button class="dropdown-item" type="button">Vodafone Cash</button>
                                <button class="dropdown-item" type="button">Visa Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" style="z-index: 1;">
                        <div class="routeTable">
                            <table>
                                <tr>
                                    <td>
                                        <div class="routeDateText">
                                            <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1" checked>
                                            <br><br>
                                            <label class="form-check-label" for="routeDay1">
                                                Sunday
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Monday
                                        </label>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Tuesday
                                        </label>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Wednesday
                                        </label>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Thursday
                                        </label>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Friday
                                        </label>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Saturday
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr onclick="javascript: console.log('Click')">
                    <th scope="col">No.</th>
                    <th scope="col">From Location</th>
                    <th scope="col">Time</th>
                    <th scope="col">Fare</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>HO-ACCRA (TUDU)</td>
                    <td>3:30AM</td>
                    <td>29.00</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>HO-ACCRA (TUDU)</td>
                    <td>3:30AM</td>
                    <td>29.00</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>HO-ACCRA (TUDU)</td>
                    <td>3:30AM</td>
                    <td>29.00</td>
                </tr>
            </tbody>
        </table>
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