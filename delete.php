<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM student_records WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully. <a href='view.php'>Go Back</a>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>