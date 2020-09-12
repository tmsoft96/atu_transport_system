<?php
session_start();
include __DIR__ . "/base_url.php";
include __DIR__ . "/controller/RouteController.php";
// include __DIR__ . "/controller/AuthController.php";
// checkUserIsLoggedIn();
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
    <div class="container">
        <div class="">
            <form>
                <div class="btn-group homeTextBox">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        <img src="public/img/travel to.png" alt=""> TRAVELING FROM
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
        
                <div class="btn-group homeTextBox">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        <img src="public/img/travel from.png" alt=""> TRAVELING TO
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
                <div class="btn-group homeTextBox">
                    <button type="button" class="btn btn-outline-dark" data-display="static" aria-haspopup="true" aria-expanded="false">
                        <img src="public/img/travel date.png" alt=""> TRAVELING DATE
                    </button>
                </div>
        
                <div class="btn-group homeTextBox">
                    <button type="button" class="btn btn-success btn-lg cButton" onclick="javascript: window.location.href = 'routeDetails.php'">Search</button>
                </div>
            </form>
        </div>
    
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