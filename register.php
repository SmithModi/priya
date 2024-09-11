<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $gender = $_POST['gender'];
    $service = $_POST['service'];
    $start_date = $_POST['start_date'];
    $time = $_POST['time'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO registrations (name, email, dob, address, contact_no, gender, service, start_date, time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisssssss", $name, $email, $dob, $address, $contact_no, $gender, $service, $start_date, $time);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
