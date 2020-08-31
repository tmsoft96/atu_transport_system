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
    <script src="./function/script.js" type="text/javascript"></script>
</head>

<body onload="openTapMyAccount('myProfileId')">
    <header>
        <nav class="navbar navbar-light" style="background-color: #0086FC;">
            <div id="logo">
                <img src="./img/logo.png" alt="logo">
            </div>
            <form class="form-inline">
                <a href="index.php">Home</a>
                <a href="bookingHistory.php">Booking History</a>
                <a href="routes.php">Routes</a>
                <a href="#">
                    <img src="./img/profilePic.png" alt="profile picture" class="rounded-circle">
                    <span>My Account</span>
                </a>
            </form>
        </nav>
    </header>

    <div class="clearfix" style="background-color: #EEEEEE;">
        <div class="float-left">
            <div class="accountLeftContainer">
                <div class="accountLeftPic">
                    <img src="./img/profilePic.png" alt="profile pic">
                    <span class="cH2">Name</span>
                </div>
                <div class="boxBottom">
                    <a href="#" onclick="openTapMyAccount('myProfileId')">
                        <img src="./img/profile.png" alt="">
                        <span class="cH3">My Profile</span>
                    </a>
                </div>
                <br><br>
                <div class="boxBottom">
                    <a href="#" onclick="openTapMyAccount('changePasswordId')">
                        <img src="./img/changePassword.png" alt="">
                        <span class="cH3">Change Password</span>
                    </a>
                </div>
                <br><br>
                <div class="boxBottom">
                    <a href="">
                        <img src="./img/signOut.png" alt="">
                        <span class="cH3">Sign Out</span>
                    </a>
                </div>
            </div>

        </div>
        <div class="accountRightContainer">
        <span class="cH1" id="title">My Profile</span>
        <br> <br>
        <div class="myProfile formSize tabContent" id="myProfileId">
            <button type="button" class="btn btn-success btn-lg">
                <img src="./img/upload.png" alt="upload">
                <span class="cH3">Update</span>
            </button>
            <br>

            <form>
                <div style="text-align: center;">
                    <img src="./img/profilePic.png" alt="profile pic" height="150px" width="150px">
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
                        <label for="exampleInputEmail1">Your Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Phone Number" value="+233">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <br><br>
                <label for="exampleInputEmail1">Kin Details</label>
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1">Your Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </form>
        </div>

        <div class="changePassword formSize tabContent" id="changePasswordId">
            <form>
                <div class="form-group">
                    <label for="exampleInputPassword1">Current Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Change Password</button>
            </form>

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