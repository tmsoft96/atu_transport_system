<body>
    <header>
        <!-- <nav class="navbar navbar-light" style="background-color: #0086FC;">
            <div id="logo">
                <img src="<?= APP_URL?>/public/img/logo.png" alt="logo">
            </div>
            <form class="form-inline">
                <a href="#">Home</a>
                <a href="bookingHistory.php">Booking History</a>
                <a href="routes.php">Routes</a>
                <a href="myAccount.php">
                    <img src="<?= APP_URL?>/public/img/profilePic.png" alt="profile picture" class="rounded-circle">
                    <span>My Account</span>
                </a>
            </form>
        </nav> -->
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #0086FC;">
            <div id="logo">
                <img src="<?= APP_URL?>/public/img/logo.png" alt="logo">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if ($_SESSION['active'] == 'homepage') echo ' active' ?>">
                        <a class="nav-link" href="<?= APP_URL?>/index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['active'] == 'booking') echo ' active' ?>">
                        <a class="nav-link" href="<?= APP_URL?>/modules/bookingHistory.php">Booking History</a>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['active'] == 'routes') echo ' active' ?>">
                        <a class="nav-link" href="<?= APP_URL?>/modules/routes.php">Routes</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <form class="form-inline">
                        <li>
                            <a href="myAccount.php">
                                <img src="<?= APP_URL?>/public/img/profilePic.png" alt="profile picture" class="rounded-circle">
                                <span>My Account</span>
                            </a>
                        </li>
                        
                    </form>
                </ul>
            </div>
        </nav>
    </header>