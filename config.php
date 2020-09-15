<?php
define("DBNAME", "transport_system");
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");

$msg = null;

try {
    //creating database
    $settings = new PDO("mysql:charset=utf8mb4;host=" . DBHOST, DBUSER, DBPASS);
    $settings->exec("CREATE DATABASE IF NOT EXISTS transport_system");

    $conn = new PDO("mysql:charset=utf8mb4;host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //creating table
    $c_sql = $conn->prepare("CREATE TABLE IF NOT EXISTS users(
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL,
            phone VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            role VARCHAR(255) NOT NULL,
            address VARCHAR(500) NOT NULL,
            kin_name VARCHAR(255) NOT NULL,
            kin_email VARCHAR(255) NOT NULL,
            kin_phone VARCHAR(255) NOT NULL,
            image TEXT NOT NULL
        )");
    $c_exe = $c_sql->execute();
    if (!$c_exe) {
        throw new LogicException("Error creating user table");
    }

    $c_sql = $conn->prepare("CREATE TABLE IF NOT EXISTS bus(
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        total_seat INT(20) NOT NULL,
        model VARCHAR(255) NOT NULL,
        number_plate VARCHAR(255) NOT NULL,
        color VARCHAR(255) NOT NULL,
        image TEXT NOT NULL
    )");
    $c_exe = $c_sql->execute();
    if (!$c_exe) {
        throw new LogicException("Error creating bus table");
    }

    $c_sql = $conn->prepare("CREATE TABLE IF NOT EXISTS route(
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        final_destinantion VARCHAR(255) NOT NULL,
        bus_stops VARCHAR(255) NOT NULL,
        fee VARCHAR(255) NOT NULL,
        departure_time VARCHAR(100) NOT NULL,
        departure_date VARCHAR(100) NOT NULL,
        arrival_time VARCHAR(100) NOT NULL,
        arrival_date VARCHAR(100) NOT NULL,
        discount VARCHAR(100) NOT NULL,
        bus_id INT(110),
        current_location VARCHAR(100) NOT NULL,
        operation_day VARCHAR(100) NOT NULL,
        FOREIGN KEY (bus_id) REFERENCES bus(id)
    )");
    $c_exe = $c_sql->execute();
    if (!$c_exe) {
        throw new LogicException("Error creating route table");
    }

    $c_sql = $conn->prepare("CREATE TABLE IF NOT EXISTS schedules(
        id INT(255) PRIMARY KEY AUTO_INCREMENT,
        user_id INT(11),
        route_id INT(11),
        seat_no INT(11),
        trip_type VARCHAR(100) NOT NULL,
        trip_bus_stop VARCHAR(100) NOT NULL,
        p_amount VARCHAR(100) NOT NULL,
        p_phone_number VARCHAR(100) NOT NULL,
        p_platform VARCHAR(100) NOT NULL,
        p_trans_id VARCHAR(255) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(id),
        FOREIGN KEY (route_id) REFERENCES route(id)
    )");
    $c_exe = $c_sql->execute();
    if (!$c_exe) {
        throw new LogicException("Error creating schedules table");
    }
} catch (PDOException $ex) {
    echo 'Exception' . $ex->getMessage();
}
