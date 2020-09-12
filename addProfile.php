<?php include __DIR__ . '/authentication/register_acount.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/style/style.css">
    <title>Continue Account</title>

    <script src="./function/script.js" type="text/javascript"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light" style="background-color: #0086FC;">
            <div id="logo">
                <img src="public/img/logo.png" alt="logo">
            </div>
        </nav>
    </header>

    <div class="container">
        <span class="cH1">Continue Account</span>
        <br>
        <div class="jumbotron d-flex justify-content-center h4 mt-3 mb-3">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <?php
                    if (isset($msg)) {
                        echo '<div class="alert alert-danger h5">
                        <p>' . $msg . '</p>
                        </div>';
                    }
                    ?>
                    <form class="mt-3" method="POST">
                        <div style="text-align: center;">
                            <img src="public/img/profilePic.jpg" alt="profile pic" height="150px" width="150px" class="rounded-circle" id="profilePic">
                            <br>
                            <div class="fileChoosenContainer mx-auto h6" style="width: 250px;">
                                <div class="form-inline">
                                    <div class="form-group mb-2">
                                        <input type="file" class="form-control-file" id="profilePictureInput" accept="image/*" onchange="uploadProfilePicture()">
                                        <input type="hidden" name="profile-pic" id="hiddenPic">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="h5">Your Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="col">
                                <label class="h5">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" value="+233" name="phone">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="h5">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $_SESSION['email'] ?>" readonly name="email">
                        </div>
                        <div class="form-group">
                            <label class="h5">Address</label>
                            <textarea class="form-control" id="address" rows="3" name="address"></textarea>
                        </div>
                        <br><br>
                        <label class="h4">Kin Details</label>
                        <div class="row">
                            <div class="col">
                                <label class="h5">Your Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="kin-name">
                            </div>
                            <div class="col">
                                <label class="h5">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="phone number" value="+233" name="kin-phone">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="h5">Email address</label>
                            <input type="email" class="form-control" id="kin-email" aria-describedby="emailHelp" name="kin-email">
                        </div>
                        <br><br>
                        <button type="submit" name="submit-btn" class="btn btn-success btn-lg btn-block">Create Account</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>