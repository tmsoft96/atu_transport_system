<?php
include __DIR__ . "/base_url.php";
include __DIR__ . "/controller/RouteController.php";
include __DIR__ . "/controller/AuthController.php";
include __DIR__ . "/main/userDetails.php";
checkUserIsLoggedIn();

$_SESSION['active'] = null;
$pageName = "My Account";
getHead(true, $pageName);

getNavbar(true);
?>


<div class="clearfix mb-5" style="background-color: #EEEEEE;">
    <div class="float-left">
        <div class="accountLeftContainer">
            <div class="accountLeftPic">
                <div class="row">
                    <div class="col">
                        <img src="<?php
                                    if (isset($profileImage)) {
                                        echo  APP_URL . "/uploads/" . $profileImage;
                                    } else {
                                        echo  APP_URL . "/public/img/profilePic.jpg";
                                    }
                                    ?>" alt="profile pic" height="70px" width="70px" class="rounded-circle">
                    </div>
                    <div class="col">
                        <span class="cH2"><?= ucwords($name)  ?></span>
                    </div>
                </div>


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
        <?php
        if (isset($msg)) {
            echo '<div class="alert alert-danger h5">
                        <p>' . $msg . '</p>
                        </div>';
        }
        if (isset($_SESSION['msg_update'])) {
            echo '<div class="alert alert-warning alert-dismissible fade show h5">
                        <p>' . $_SESSION['msg_update'] . '</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
        }
        ?>
        <div class="myProfile formSize tabContent" id="myProfileId">
            <form class="mb-5 h5" id="update-form" method="POST" enctype="multipart/form-data" action="main/userDetails.php">
                <input type="hidden" name="user-id" value="<?= ucwords($userId) ?>">
                <div style="text-align: center;">
                    <img src="<?php
                                if (isset($profileImage)) {
                                    echo  APP_URL . "/uploads/" . $profileImage;
                                } else {
                                    echo  APP_URL . "/public/img/profilePic.jpg";
                                }
                                ?>" alt="profile pic" height="150px" width="150px" class="rounded-circle" id="profilePic">
                    <br><br><br>
                    <!-- <div class="fileChoosenContainer mx-auto" style="width: 350px;">
                        <div class="form-inline">
                            <div class="form-group mb-2">
                                <input type="file" class="form-control-file" id="profilePictureInput" accept="image/*" onchange="uploadProfilePicture()" name="profile-pic" value="<?= ucwords($profileImage) ?>">
                                <input type="hidden" value="<?= ucwords($profileImage) ?>" name="profile-pic-name"/>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="name" value="<?= ucwords($name) ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Phone Number" value="<?= ucwords($phone) ?>" name="phone">
                    </div>
                    <div class="col">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?= ucwords($email) ?>" readonly>
                    </div>
                </div>
                <div class="row mb-4 mt-3">
                    <div class="col">
                        <label>Address</label>
                        <textarea class="form-control" id="address" rows="3" name="address"><?= ucwords($address) ?></textarea>
                    </div>
                </div>
                <br><br>
                <label class="h4">Kin Details</label>
                <div class="row">
                    <div class="col">
                        <label class="h5">Your Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="kin-name" value="<?= ucwords($kinName) ?>">
                    </div>
                    <div class="col">
                        <label class="h5">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="phone number" name="kin-phone" value="<?= ucwords($kinPhone) ?>">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="h5">Email address</label>
                    <input type="email" class="form-control" id="kin-email" aria-describedby="emailHelp" name="kin-email" value="<?= ucwords($kinEmail) ?>">
                </div>
                <br><br>

                <button type="submit" form="update-form" class="btn btn-success btn-lg btn-block" name="submit-update">Update</button>
            </form>
        </div>

        <div class="changePassword formSize tabContent" id="changePasswordId">
            <form method="POST">
                <input type="hidden" name="user-id" value="<?= ucwords($userId) ?>">
                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" id="newPassword" name="new-password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirm-password">
                </div>
                <button type="submit" name="change_password" class="btn btn-success btn-lg btn-block">Change Password</button>
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