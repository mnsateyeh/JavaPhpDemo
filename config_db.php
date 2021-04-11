<?php header("Content-Type: text/html; charset=utf-8");

function get_link() {
    $host = "http://www.topsch.net";
    $user = "info12";
    $pass = "9lgZ9ZwJTfV6O7EV";
    $database = "mns_ateyeh";
    $link = new mysqli($host, $user, $pass, $database);
    if (mysqli_connect_errno()) {
        die('keine Verbindung zur Datenbank:' . mysqli_connect_error() . '(' . mysqli_connect_errno() . ')');
    }
    mysqli_query($link, "SET NAMES 'utf8'");
    return($link);
}
