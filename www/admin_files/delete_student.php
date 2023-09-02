<?php
session_start();

require_once "db_connection.php";

if (isset($_GET["stud_id"])) {
    $stud_id = $_GET["stud_id"];

    // Delete student record
    $sql = "DELETE FROM Students WHERE stud_id = '$stud_id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: admin_panel.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
