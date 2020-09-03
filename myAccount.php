<?php
session_start();
include __DIR__ . "/base_url.php";
include __DIR__ . "/controller/RouteController.php";
include __DIR__ . "/controller/AuthController.php";
checkUserIsLoggedIn();



getHead(true, $pageName);

getNavbar(true);
?>


<div class="clearfix mb-5" style="background-color: #EEEEEE;">
    <div class="float-left">
        <div class="accountLeftContainer">
            <div class="accountLeftPic">
                <img src="public/img/profilePic.png" alt="profile pic">
                <span class="cH2">Name</span>
            </div>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('myProfileId', 'My Profile')">
                    <img src="public/img/profile.png" alt="">
                    <span class="cH3">My Profile</span>
                </a>
            </div>
            <br><br>
            <div class="boxBottom">
                <a href="#" onclick="openTapMyAccount('changePasswordId', 'Change Password')">
                    <img src="public/img/changePassword.png" alt="">
                    <span class="cH3">Change Password</span>
                </a>
            </div>
            <br><br>
            <div class="boxBottom">
                <a href="">
                    <img src="public/img/signOut.png" alt="">
                    <a href="<?= APP_URL ?>/logout.php">Sign Out</a>
                </a>
            </div>
        </div>

    </div>
    <div class="accountRightContainer mb-5">
        <span class="cH1" id="title">My Profile</span>
        <br> <br>
        <div class="myProfile formSize tabContent" id="myProfileId">
            <form class="mb-5" id="update-form">
                <div style="text-align: center;">
                    <img src="public/img/profilePic.png" alt="profile pic" height="150px" width="150px">
                    <br>
                    <div class="fileChoosenContainer mx-auto" style="width: 250px;">
                        <div class="form-inline">
                            <div class="form-group mb-2">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="text" class="form-control" name="mname">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Phone Number" value="+233">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row mb-4 mt-3">
                    <div class="col">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>

                <button form="update-form" class="btn btn-success btn-lg btn-block">Update</button>
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
<?php
getFooter(true);
?>
<script src="<?= APP_URL ?>/function/script.js"></script>
<script>
    $(function() {
        openTapMyAccount('myProfileId', 'My Profile')
    });
</script>