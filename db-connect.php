<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'feedback';

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
