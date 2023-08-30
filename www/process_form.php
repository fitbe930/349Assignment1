<?php
// Database connection parameters
$host = "192.168.2.12";
$username = "webuser";
$password = "password";
$dbname = "studs";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$course = $_POST['course'];
$stud_id = $_POST['stud_id'];

// Prepare and execute the SQL query
$sql = "INSERT INTO Students (firstname, lastname, course, stud_id) VALUES ('$firstname', '$lastname', '$course', '$stud_id')";

if ($conn->query($sql) === TRUE) {
    echo "Sign up Successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<body>
    <a href ="index.html">
        <button>Return</button>
</body>