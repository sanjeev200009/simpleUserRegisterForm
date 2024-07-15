<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "horizon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO batch11 (firstname, lastname, Email, gender, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstname, $lastname, $Email, $gender, $address);

// Set parameters and execute
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Email = $_POST['Email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();

?>