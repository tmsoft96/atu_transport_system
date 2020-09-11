<?php include __DIR__ . '/authentication/create_account.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/style/style.css">
    <title>Create Account</title>
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
        <span class="cH1">Create Account</span>
        <div class="jumbotron d-flex justify-content-center h4 mt-3 mb-3">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <?php
                    if (isset($msg)) {
                        echo '<div class="alert alert-danger h5">
                        <p>' . $msg . '</p>
                        </div>';
                    }
                    ?>
                    <form class="mt-3" method="POST">
                        <div class="row">
                            <div class="col">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                 aria-describedby="emailHelp" value="<?php echo $_SESSION['email'] ?>" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="password" 
                                value="<?php echo $_SESSION['password'] ?>" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm-password" class="form-control" required>
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit-btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
        <div style="text-align: center;">
            <button type="button" class="btn btn-light" onclick="javascript: window.location.href =  'login.php'">
                <div class="h4">Login</div>
            </button>
        </div>
    </div>
</body>

</html>