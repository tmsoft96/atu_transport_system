<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #0086FC;">
            <div id="logo">
                <img src="<?= APP_URL ?>/public/img/logo.png" alt="logo">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if ($_SESSION['active'] == 'homepage') echo ' active' ?>">
                        <a class="nav-link" href="<?= APP_URL ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['active'] == 'booking') echo ' active' ?>">
                        <a class="nav-link" href="<?= APP_URL ?>/modules/bookingHistory.php">Booking History</a>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['active'] == 'routes') echo ' active' ?>">
                        <a class="nav-link" href="<?= APP_URL ?>/modules/routes.php">Routes</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <form class="form-inline">

                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") echo 'visible';
                                                else echo 'invisible'; ?> " href="<?= APP_URL ?>/admin.php">Admin</a>
                        </li>
                        <li>
                            <a href="<?= APP_URL ?>/myAccount.php">
                                <img src="<?php
                                            if (isset($_SESSION['profilePic'])) {
                                                echo  APP_URL . "/uploads/" . $_SESSION['profilePic'];
                                            } else {
                                                echo  APP_URL . "/public/img/profilePic.jpg";
                                            }
                                            ?>" alt="profile pic" class="rounded-circle">

                                <span>My Account</span>
                            </a>
                        </li>
                        <li>
                            <?php
                            if (isset($_SESSION['logged'])) {
                                echo "<a class=\"btn btn-info\" href=\"" . APP_URL . "/logout.php\">Logout</a>";
                            } else {
                                echo "<a class=\"btn btn-info\" href=\"" . APP_URL . "/logout.php\">Login</a>";
                            }
                            ?>

                        </li>

                    </form>
                </ul>
            </div>
        </nav>
    </header>