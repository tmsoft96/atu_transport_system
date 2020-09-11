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
                    <form class="mt-3" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlTextarea1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlTextarea1">Confirm Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
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