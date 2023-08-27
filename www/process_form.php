<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$course = $_POST["course"];
$stud_id = $_POST["stud_id"];

$host = "192.168.2.12";
$dbname = "studs";
$username = "webuser";
$password = "password";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " , mysqli_connect_error());
}

$sql = "INSERT INTO Students (firstname, lastname, course, stud_id) VALUES (?, ?, ? ,?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $course, $stud_id);

if(mysqli_stmt_execute($stmt)) {
    echo "Record saved.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>