<?php
// Database connection
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if ID is passed in URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM student_records WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the student list page
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No ID specified.";
}

$conn->close();
?>
