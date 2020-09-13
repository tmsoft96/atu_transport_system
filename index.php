<?php
include __DIR__ . "/base_url.php";
include __DIR__ . "/controller/RouteController.php";
// include __DIR__ . "/controller/AuthController.php";
// checkUserIsLoggedIn();
include __DIR__ . "/main/homeDetials.php";

$pageName = "homepage";
$_SESSION['active'] = 'homepage';
$_SESSION['msg_update'] = null;

getHead(true, $pageName);
getNavbar(true);
?>
<style>
    #divcolor {
        /* background-image: url('../public/img/VIP-Bus.png'); */
        border-color: red;

    }
</style>
<div class="container-fluid">
    <div class=" d-flex justify-content-center h2 mt-3 mb-3">
        <span> Online Bus Ticketing System </span>
    </div>
    <br>
    <div class="container">
        <?php
        if (isset($msg)) {
            echo '<div class="alert alert-danger h5">
                        <p>' . $msg . '</p>
                        <span style="font-size: 13px"><i>Click on the routes to view all trips</i></span>
                        </div>';
        }
        ?>
       
        <div class="">
            <form method="GET">
                <input type="hidden" id="homeCurrentText" name="location">
                <input type="hidden" id="homeDestinationText" name="destination">
                <div class="btn-group homeTextBox">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        <img src="public/img/travel to.png" alt=""> <span id="homeCurrent">TRAVELING FROM</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <?php
                        foreach ($routes as &$trip) {
                            echo '<button class="dropdown-item" type="button" onclick="selectHomeSearch(\'homeCurrentText\', \'homeCurrent\', \'' . $trip["current_location"] . '\')">' .
                                $trip["current_location"]
                                . '</button>';
                        }
                        ?>
                    </div>
                </div>

                <div class="btn-group homeTextBox">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        <img src="public/img/travel from.png" alt=""> <span id="homeDestination">TRAVELING TO</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <?php
                        foreach ($routes as &$trip) {
                            echo '<button class="dropdown-item" type="button"  onclick="selectHomeSearch(\'homeDestinationText\', \'homeDestination\', \'' . $trip["bus_stops"] . '\')">' .
                                $trip["bus_stops"]
                                . '</button>';
                        }
                        ?>
                    </div>
                </div>
                <div class="btn-group homeTextBox">
                    <input type="date" name="date" placeholder="TRAVELING DATE" class="btn btn-outline-dark" style="height: 52px;" />
                </div>

                <div class="btn-group homeTextBox">
                    <button type="submit" name="submit-home-search" class="btn btn-success btn-lg cButton">Search</button>
                    <!-- onclick="javascript: window.location.href = 'routeDetails.php'" -->
                </div>
            </form>
        </div>
        <br><br>

        <div>
            <img src="public/img/VIP-Bus.png" alt="buses" class="img-fluid" width="100%;">
        </div>
        <div class="row mt-4">
            <div class="col-sm">
                <br><br>
                <span class="cH2">
                    Do you want to go on a journey without hustling for ticket? Relax, your bus-stop is just a click
                    away.
                </span>
                <br><br>
                <span class="cH3">
                    Book a bus ticket and enjoy your ride without cramming for space, in a comfortable bus, at a cost
                    that your pocket can happily bear.
                </span>
            </div>
            <div class="col-sm homeIcon">
                <img src="public/img/travel.png" alt="travel">
            </div>
        </div>

    </div>
</div>


<?php
getFooter(true);
?>
<script src="<?= APP_URL ?>/function/script.js"></script>