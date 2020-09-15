<?php
include __DIR__ . "/../base_url.php";
include __DIR__ . "/../controller/RouteController.php";
include __DIR__ . "/../main/routeDetails.php";
// include __DIR__ . "/../controller/AuthController.php";
// checkUserIsLoggedIn();

$pageName = "Bus Routes";
$_SESSION['active'] = 'routes';
$_SESSION['msg_update'] = null;

getHead(false, $pageName);

getNavbar(false);
?>

<div class="container">
    <span class="cH1">Routes</span>
    <br><br>
    <div class="box" style="padding: 20px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <span class="cH2">Select your location</span>
                    <br><br>
                    <input type="hidden" id="homeCurrentText" name="location">
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            <span id="homeCurrent"> -Choose Location-</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                            foreach ($routes as &$trip) {
                                echo '<button class="dropdown-item" type="button" onclick="selectHomeSearch(\'homeCurrentText\', \'homeCurrent\', \'' . $trip["current_location"] . '\')">' .
                                    $trip["current_location"]
                                    . '</button>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="z-index: 1;">
                    <div class="routeTable">
                        <table>
                            <tr>
                                <?php
                                $monday = false;
                                $tuesday = false;
                                $wednesday = false;
                                $thurday = false;
                                $friday = false;
                                $saturday = false;
                                $sunday = false;
                                foreach ($routes as &$trip) {
                                    $operationDay = $trip["operation_day"];
                                    if (strtolower($operationDay) == "sunday") {
                                        $sunday = true;
                                    } else  if (strtolower($operationDay) == "monday") {
                                        $monday = true;
                                    } else  if (strtolower($operationDay) == "tuesday") {
                                        $tuesday = true;
                                    } else  if (strtolower($operationDay) == "wednesday") {
                                        $wednesday = true;
                                    } else  if (strtolower($operationDay) == "thursday") {
                                        $thurday = true;
                                    } else  if (strtolower($operationDay) == "friday") {
                                        $friday = true;
                                    } else  if (strtolower($operationDay) == "saturday") {
                                        $saturday = true;
                                    }
                                }
                                if ($sunday) echo ' <td>
                                    <div class="routeDateText">
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1" checked>
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Sunday
                                        </label>
                                    </div>
                                </td>';
                                if ($monday) echo '<td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Monday
                                    </label>
                                </td>';
                                if ($tuesday) echo '<td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Tuesday
                                    </label>
                                </td>';
                                if ($wednesday) echo '<td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Wednesday
                                    </label>
                                </td>';
                                if ($thurday) echo '<td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Thursday
                                    </label>
                                </td>';
                                if ($friday) echo '<td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Friday
                                    </label>
                                </td>';
                                if ($saturday) echo '<td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Saturday
                                    </label>
                                </td>';
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr onclick="javascript: console.log('Click')">
                <th scope="col">No.</th>
                <th scope="col">From Location</th>
                <th scope="col">Time</th>
                <th scope="col">Fare</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 0;
            foreach ($routes as &$trip) {
                $num++;
                echo '
                        <tr onclick="routeLocation('. $trip["id"] .')">
                            <th scope="row">' . $num . '</th>
                            <td>' . strtoupper($trip["current_location"]) . " - " . strtoupper($trip["final_destinantion"]) . "(" . strtoupper($trip["bus_stops"]) . ")" . '</td>
                            <td>' . $trip["departure_time"] . '</td>
                            <td>' . $trip["arrival_time"] . '</td>
                        </tr>
                    ';
            }
            ?>
        </tbody>
    </table>
</div>
<?php
getFooter(false);
?>
<script src="<?= APP_URL ?>/function/script.js"></script>
<script>
    function routeLocation(id){
        window.location.href =  '/busticket/routeDetails.php?trip_id=' + id;
    }
</script>