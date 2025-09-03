
<?php
// Database connection
$servername = "localhost";
$username = "root";   // change if needed
$password = "";       // change if needed
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $department = trim($_POST['department']);
    $matric = trim($_POST['matric']);

    if (!empty($fullname) && !empty($email) && !empty($department) && !empty($matric)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "INSERT INTO student_records (fullname, email, department, matric)
                    VALUES ('$fullname', '$email', '$department', '$matric')";
            if ($conn->query($sql) === TRUE) {
                echo "Registration successful! <a href='view.php'>View Students</a>";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Invalid email format.";
        }
    } else {
        echo "All fields are required.";
    }
}
$conn->close();
?>