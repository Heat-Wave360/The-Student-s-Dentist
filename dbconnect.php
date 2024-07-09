<?php
$servername = "localhost";
$username = "Admin";
$password = "admin123";
$dbname = "patient_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>