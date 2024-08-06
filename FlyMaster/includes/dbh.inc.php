<?php
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "flymaster_login";

$conn =new mysqli($serverName, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
