<?php 
ob_start(); //turns on output buffering

date_default_timezone_set("Europe/London");

//pdo
try {
    $con = new PDO("mysql:dbname=videotube;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed:" . $e->getMessage();
}
?>