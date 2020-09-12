<?php include __DIR__ . '/authentication/login_authentication.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/style/style.css">
    <title>Login</title>
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
        <span class="cH1">Login</span>
        <div class="jumbotron d-flex justify-content-center h4 mt-3 mb-3">
            <div class="card " style="width: 30rem;">
                <div class="card-body">
                    <?php
                    if (isset($msg)) {
                        echo '<div class="alert alert-danger h5">
                        <p>' . $msg . '</p>
                        </div>';
                    }
                    if(isset($_SESSION['msg']) || $_SESSION['msg'] != "") {
                        echo '<div class="alert alert-info h5">
                        <p>' . $_SESSION['msg'] . '</p>
                        </div>';
                    }
                    ?>
                    <form method="POST" class="mt-3">
                        <div class="row">
                            <div class="col">
                                <label class="h4">Email address</label>
                                <input type="email" id="userName" name="email" class="form-control" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlTextarea1">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div style="text-align: right;" class="mt-3">
                            <button type="button" class="btn btn-light"><b><u><i>Forget Password</i></u></b></button>
                        </div>
                        <br>
                        <div class="mt-3">
                            <button type="submit" id="submit" name="submit-btn" class="btn btn-success btn-lg btn-block">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <br><br>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-light" onclick="javascript: window.location.href = 'createAccount.php'">
                <div class="h4">Create new account</div>
            </button>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="public/bootstrap/jquery-3.4.1.slim.min.js"></script>
    <script src="public/bootstrap/popper.min.js"></script>
    <script src="public/bootstrap/bootstrap.min.js"></script>
</body>

</html>