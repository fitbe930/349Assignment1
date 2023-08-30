<?php
$host = "192.168.2.12";
$username = "webuser";
$password = "password";
$dbname = "studs";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
