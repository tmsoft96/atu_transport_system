<?php
session_start();
include __DIR__ . "/../base_url.php";
include __DIR__ . "/../controller/RouteController.php";
$pageName = "Bus Routes";
$_SESSION['active'] = 'routes';
// include "config/conn.php";
// include __DIR__ . "/login/sessions.php";

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
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            -Choose Location-
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" type="button">MTN Mobile Money</button>
                            <button class="dropdown-item" type="button">AirtelTigo Money</button>
                            <button class="dropdown-item" type="button">Vodafone Cash</button>
                            <button class="dropdown-item" type="button">Visa Card</button>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="z-index: 1;">
                    <div class="routeTable">
                        <table>
                            <tr>
                                <td>
                                    <div class="routeDateText">
                                        <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1" checked>
                                        <br><br>
                                        <label class="form-check-label" for="routeDay1">
                                            Sunday
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Monday
                                    </label>
                                </td>
                                <td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Tuesday
                                    </label>
                                </td>
                                <td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Wednesday
                                    </label>
                                </td>
                                <td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Thursday
                                    </label>
                                </td>
                                <td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Friday
                                    </label>
                                </td>
                                <td>
                                    <input class="form-check-input" type="radio" name="routeDay" id="routeDay1" value="option1">
                                    <br><br>
                                    <label class="form-check-label" for="routeDay1">
                                        Saturday
                                    </label>
                                </td>
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
            <tr>
                <th scope="row">1</th>
                <td>HO-ACCRA (TUDU)</td>
                <td>3:30AM</td>
                <td>29.00</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>HO-ACCRA (TUDU)</td>
                <td>3:30AM</td>
                <td>29.00</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>HO-ACCRA (TUDU)</td>
                <td>3:30AM</td>
                <td>29.00</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
getFooter(false);
?>