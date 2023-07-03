<?php
// Database connection configuration
$servername = "127.0.0.1";
$username = "root";
$password = "Friend@1.";
$dbname = "get_job";

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $work = $_POST['work'];

    // Prepare and execute the SQL query to insert the form data
    $sql = "INSERT INTO job_entries (fullname, phno, email, address, work)
            VALUES ('$fullname', '$phno', '$email', '$address', '$work')";

    // Add SQL code to create the ID column
    $sql = "ALTER TABLE job_entries
    ADD id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY FIRST";

    if ($conn->query($sql) === TRUE) {
        echo "Form data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve and display the stored data
$sql = "SELECT * FROM job_entries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Stored Form Data:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "Full Name: " . $row['fullname'] . "<br>";
        echo "Phone Number: " . $row['phno'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Address: " . $row['address'] . "<br>";
        echo "Work: " . $row['work'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>


