<?php
// Database connection
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Fetch data
$sql = "SELECT * FROM student_records";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Students</title>
</head>
<body>
    <h2>Registered Students</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Matric Number</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['fullname']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['department']."</td>
                        <td>".$row['matric']."</td>
                        <td><a href='delete.php?id=".$row['id']."'>Delete</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No students registered</td></tr>";
        }
        ?>
    </table>
</body>
</html>